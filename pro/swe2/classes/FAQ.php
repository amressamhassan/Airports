<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FAQ
 *
 * @author Ahmed
 */
class FAQ {

    private $question;
    private $answers = array();

    function getQuestion() {
        return $this->question;
    }

    function getAnswers() {
        return $this->answers;
    }

    function setQuestion($question) {
        $this->question = $question;
    }

    function setAnswers($answers) {
        $this->answers = $answers;
    }

    function addFAQ(Db &$db, $mid,$id=0) {
        if($id>0){$db->Update("help_qustion","id",$id, "help_qustion", $this->question);}
        else{$db->insert("help_qustion", "help_qustion", $this->question, "Manager_ID", $mid);}
        $qid = $db->get_last_id();
        if($id>0){
            $qid=$id;
        }
        foreach ($this->answers as $value) {
            $value = str_replace("'", "\'", $value);

            $db->insert("help_answer", "help_answer", $value, "id_help_q", $qid);
//            echo $value;  
        }
        return true;
    }

    function showFAQ(Db &$db, $check) {
        $qid = 0;
        $tempid = 0;
        $sql2 = $db->tailoredtemp();

        while ($row = mysqli_fetch_assoc($sql2)) {
            $button = '<a class="btn btn-primary " style="background-color:#5D9CEC" href="QuestionDelete.php?id=' . $row["id"] . '">Delete</a><a class="btn btn-primary" style="background-color:#5D9CEC" href="UpdateQuestion.php?id=' . $row["id"] . '">Update</a><a class="btn btn-primary" style="background-color:#5D9CEC" href="AddUserHelper.php?id=' . $row["id"] . '">Add new points</a>';
            $button2 = '<a href="AnswerDelete.php?id=' . $row["aid"] . '"><h6>Delete</h6></a><a href="UpdateAnswer.php?id=' . $row["aid"] . '"><h6>Update</h6></a>';
            if (!$check) {
                $button = "";
                $button2 = "";
            }
            if ($qid == 0) {
                $qid = $row['id'];
                echo'
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">' . $row['help_qustion'] . ' ' . $button . '</h3>
                        </div><div class="panel-body"><ul>';
            }
            if ($qid != $row['id']) {
                echo' </ul>
                        </div>
                      </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">' . $row['help_qustion'] . ' ' . $button . '</h3>
                        </div><div class="panel-body"><ul>';
                echo'<li>' . $row['help_answer'] . ' ' . $button2 . '</li>';
            } else {
                echo'<li>' . $row['help_answer'] . '' . $button2 . '</li>';
            }
            $qid = $row['id'];
        }
        echo'</ul></div></div>';
        return true;
    }

    function deleteQuestion(Db &$db, $id) {
        $db->Delete("help_qustion", "id", $id);
        return true;
    }

    function deleteAnswer(Db &$db, $id) {
        $db->Delete("help_answer", "aid", $id);
        return true;
    }

    function setQuestionFromDatabase(Db &$db, $id) {
        $sql2 = $db->selectOneTable("help_qustion", "id", $id);
        while ($row = mysqli_fetch_assoc($sql2)) {
            $this->question = $row["help_qustion"];
        }
        return true;
    }

    function updateQuestion(Db &$db, $id) {
        $db->Update("help_qustion", "id", $id, "help_qustion", $this->question);
        return true;
    }

    function setAnswerFromDatabase(Db &$db, $id) {
        $sql2 = $db->selectOneTable("help_answer", "aid", $id);
        while ($row = mysqli_fetch_assoc($sql2)) {
            $this->answers[0] = $row["help_answer"];
        }
        return true;
    }

    function updateAnswer(Db &$db, $id,$answer) {
        $db->Update("help_answer", "aid", $id, "help_answer",$answer );
        return true;
    }

}
