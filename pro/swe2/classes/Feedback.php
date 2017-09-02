<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feedback
 *
 * @author Ahmed
 */
class Feedback {

    private $id;
    private $body;
    private $subject;
    private $rating;
    private $uid;

    function getId() {
        return $this->id;
    }

    function getBody() {
        return $this->body;
    }

    function getSubject() {
        return $this->subject;
    }

    function getRating() {
        return $this->rating;
    }

    function getUid() {
        return $this->uid;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBody($body) {
        $this->body = $body;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setRating($rating) {
        $this->rating = $rating;
    }

    function setUid($uid) {
        $this->uid = $uid;
    }

    function addFeedback(Db &$db) {
        $db->insert("feedback", "Body", $this->body, "Subject", $this->subject, "Rating", $this->rating, "User_ID", $this->uid);
        return true;
    }

    function showFeedback(Db &$db,  Customer &$customer) {
        $sql2 = $db->selectOneTable1("feedback");

        while ($row = mysqli_fetch_assoc($sql2)) {
            echo ' <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title"> User ID :  ' . $customer->getCustomerNameById($db, $row['User_ID']) . ' <br> Subject : ' . $row['Subject'] . '</h3>
                        </div><div class="panel-body">
                        ' . $row['Body'] . '
                         </div>
                         </div>';
                        
        }
        echo'</ul></div></div>';
        return true;
    }

}
