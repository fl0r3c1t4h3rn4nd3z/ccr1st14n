<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Havalite {

    public function __construct() {
        //parent::__construct();
        // var_dump("ok");
        $pathblog = APPPATH . 'third_party';
        set_include_path($pathblog);
        $dbPath = 'havalite.db3';
        $this->dbp = $pathblog . '/havalite/data/' . $dbPath;
        var_dump($this->dbp);
        $this->db = new PDO('sqlite:' . $this->dbp);
        /*         * ************************************************** */

        $this->redefine_single_post = array();

        $this->frontPage = $this->hava_options('frontPage');
    }

    /* return all settings
      /* $opt = the name of the option (title, tagline, description, url, language, theme etc..
     */

    function hava_options($opt) {
        if (isset($opt)) {
            $result = $this->hava_all_queries("SELECT * FROM options WHERE opt = ?", array($opt));
            $res = '';

            foreach ($result as $row) {
                $res = $row['val'];
            }
            return $res;
        }
    }

    function checkPreview($log) {
        if (isset($log)) {
            $sq = hava_single_query("SELECT * FROM users WHERE log = ?", $log);
            if ($sq['log'] != '')
                return $sq['log'];
            else
                return false;
        }
    }

    /* returns data for single post
      /* $id = post id, leave empty '' or type 'all' to view all
      /* $dataName = id, title, cat, tags, author, text, date, comments (true, false), prop (true=public, false=draft)
      /* $slice = a Number of chars from string. 0 = whole Text
     */

    function hava_single_post($id, $dataName, $slice = '0', $related = 'Related Posts') {
        global $preview, $redefine_single_post;
        $res = '';
        $opt = $this->hava_options('similarPost');

        if ($this->checkPreview($preview) != '')
            $prop = '';
        else
            $prop = " prop='1' AND";

        $result = $this->hava_all_queries("SELECT * FROM posts WHERE " . $prop . " id = ?", array($id));

        if ($result) {
            foreach ($result as $row) {
                if ($slice > 0) {
                    $data = strip_tags($row[$dataName], '<p><br>');
                    $res .= substr($data, 0, $slice);
                } else {
                    $similar = '';
                    if ($dataName == 'text' and $opt == 'on') {
                        $similar = $this->hava_similar_post($id, $related);
                    }
                    $res .= $row[$dataName] . $similar;
                }
            }
        }

        if (!empty($redefine_single_post) and $dataName == 'text') {
            foreach ($redefine_single_post as $rsp) {
                if (function_exists($rsp))
                    $res = call_user_func($rsp, $res);
            }
        }

        return $res;
    }

    /* returns array
      /* $SQL = The sql statment
      /* $data = an array with sql values if WHERE statment exists, other wise set ''
     */

    function hava_all_queries($SQL, $data = array()) {
        if (isset($SQL)) {

            $stm = $this->db->prepare($SQL);
            if (!$stm) {
                $errorInfo = $this->db->errorInfo();
                echo $errorInfo[2] . ': ' . $SQL;
                print_r($data);
            }
            if (!empty($data))
                $stm->execute($data);
            else
                $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else
            return false;
    }

    /* returns single array
      /* $SQL = The sql statment
      /* $data = the sql value if WHERE statment exists, other wise set 'all'
      /* $col = column name
     */

    function hava_single_query($SQL, $data, $col = '') {
        if (isset($SQL) and isset($data)) {


            $SQL = $this->db->prepare($SQL);

            if ($data == "all")
                $SQL->execute();
            else
                $SQL->execute(array($data));

            $res = $SQL->fetch(PDO::FETCH_ASSOC);

            if ($col) {
                return $res[$col];
            } else {
                return $res;
            }
        } else
            return false;
    }

    /* returns array of all public posts
      /* $cat = get only posts of this category
      /* $limit = limit number of posts
     */

    function hava_posts($cat = '', $limit = '') {
        $page_cat = $this->hava_options('page_cat');
        $postAmount = $this->hava_options('post_amount');
        if (isset($limit) and $postAmount > 0) {
            $limitStr = " LIMIT " . $limit;
        } else
            $limitStr = '';

        if ($cat) {
            $result = $this->hava_all_queries("SELECT * FROM posts WHERE  prop='1' AND cat= ? AND cat !='" . $page_cat . "' ORDER BY date DESC" . $limitStr, array($cat));
        } else {
            $result = $this->hava_all_queries("SELECT * FROM posts WHERE  prop='1' AND cat !='" . $page_cat . "' ORDER BY date DESC" . $limitStr);
        }
        return $result;
    }

    /* get similar post according to saved keywords
      /* $postId = the id of the current post
     */

    function hava_similar_post($postId, $related = '') {
        $res = '';
        $post = $this->hava_single_query("SELECT * FROM posts WHERE prop=1 AND id = ?", $postId, "tags");
        if (!empty($post)) {
            $res = '<fieldset><legend>' . $related . '</legend>';
            $tag = preg_split('/[ |,]/', $post);
            for ($i = 0; $i < count($tag); $i++) {
                $ta = trim($tag[$i]);
                if (!empty($ta)) {
                    $res .= '<a title="' . $ta . '" href=?s=' . $ta . '>' . $ta . '</a> ';
                }
            }
            $res .= '</fieldset>';
        }
        return $res;
    }

    /* get date formate as set bei the user
      /* $myDate = the date
      /* $formate = define own formate or leave empty
     */

    function hava_date($myDate, $formate = '') {
        if ($formate == '') {
            $formate = $this->hava_options('date_time');
        }
        $myDate = strtotime($myDate);
        return date($formate, $myDate);
    }

}
