<?php
require_once 'database.php';
/** 
 * @author amr
 * 
 */
interface payment
{
    public  function payment(Db $db,$purchases_id);
}

/**
 *
 * @author amr
 *        
 */
class payment_main
{
    private $arrid;
    private $arrval;
    public function setarrid(Db $db,$arrid)
    {
        $count=count($arrid);
        
        for ($i=0;$i<$count;$i++)
        {
            $id=$arrid[$i];
            $query=$db->selectOneTable('payment_select_option','id_s_o',$id );
            if((@mysqli_fetch_array($query))){
                $this->arrid[$i]=$arrid[$i];
            }
            else {
                return false;
            }
             
        }
        return true;
    }
    public function setarrval(Db $db,$arrval)
    {
        $count=count($arrval);
        for ($i=0;$i<$count;$i++)
        {
    
           if ($count>=2)
            {
                if(!(is_numeric($arrval[$i]))){
                    return false;
                }
            }
            if((($arrval[$i]))){
                $this->arrval[$i]=$arrval[$i];
               
            }
            else {
                return false;
            }
             
        }
        return true;
    }
    public function getarrid()
    {
        return $this->arrid;
    }
    public function getarrval()
    {

        return $this->arrval;
    }
    
    public function showpaymentMethod(Db $db)
    {

      return  $db->selectOneTable1('payment');
        
    }
    public function showMethod(Db $db,$id)
    {
    
        $at  = array('payment_select_option','payment_option');
        $aid = array('payment_option','id_o');
        $afd = array('payment_option');
        return  $db->myfunc($at, $aid, $afd, 'payment_select_option','payment_id', $id);
    
    }
}
class visa extends payment_main  implements payment
{
    
    public function payment(Db $db,$purchases_id)
    {
        
        $query=$db->selectOneTable('payment_select_values', 'purchases_id',$purchases_id );
        $query2=$db->selectOneTable('ticket', 'Ticket_ID',$purchases_id );
   
        if(!(mysqli_fetch_array($query))&&(mysqli_fetch_array($query2))){
           
        $count=count($this->getarrid());
     
        for ($i=0;$i<$count;$i++)
        {
            $id_pay_select_values=$this->getarrid()[$i];
            $value=$this->getarrval()[$i];
         
            $db->insert('payment_select_values'
                ,'id_pay_select_values',$id_pay_select_values
                ,'purchases_id',$purchases_id
                ,'value',$value);
            
        }
        $db->Update('ticket',$purchases_id,'Ticket_ID','flag',1);
        return true;
        }
        else {
            return false;
        }
    }
}

/**
 *
 * @author amr
 *
 */
class cash extends payment_main  implements payment
{
    
    public function payment(Db $db,$purchases_id)
    {
        
        $query=$db->selectOneTable('payment_select_values', 'purchases_id',$purchases_id );
        $query2=$db->selectOneTable('ticket', 'Ticket_ID',$purchases_id );
        if(!(mysqli_fetch_array($query))&&(mysqli_fetch_array($query2))){
        $count=count($this->getarrid());
        for ($i=0;$i<$count;$i++)
        {
            $id_pay_select_values=$this->getarrid()[$i];
            $value=$this->getarrval()[$i];
            $db->insert('payment_select_values'
                ,'id_pay_select_values',$id_pay_select_values
                ,'purchases_id',$purchases_id
                ,'value',$value);
            
        }
   
        return true;
        }
        else {
            return false;
        }
    }
}
class nothing extends payment_main  implements payment
{

    public function payment(Db $db,$purchases_id)
    {}
}
/*
$aa=new Db();
$a=new visa();
$arrid[0]=6;
$arrid[1]=7;
$arrid[2]=8;

$arrval[0]=666;
$arrval[1]=7777;
$arrval[2]=8888;

$a->setarrid($aa, $arrid);
$a->setarrval($aa, $arrval);
$a->payment($aa, 5);*/


?>