<?php
/**
 * PHP萬年曆
 * @author Fly 2012/10/16
 */
class Calendar{
    protected $_table;//table表格
    protected $_currentDate;//當前日期
    protected $_year;    //年
    protected $_month;    //月
    protected $_days;    //給定的月份應有的天數
    protected $_dayofweek;//給定月份的 1號 是星期幾
    /**
     * 建構函式
     */
    public function __construct()
    {
        $this->_table=””;
        $this->_year  = isset($_GET[“y”])?$_GET[“y”]:date(“Y”);
        $this->_month = isset($_GET[“m”])?$_GET[“m”]:date(“m”);
        if ($this->_month>12){//處理出現月份大於12的情況
            $this->_month=1;
            $this->_year ;
        }
        if ($this->_month<1){//處理出現月份小於1的情況
            $this->_month=12;
            $this->_year–;
        }
        $this->_currentDate = $this->_year.’年’.$this->_month.’月份’;//當前得到的日期資訊
        $this->_days           = date(“t”,mktime(0,0,0,$this->_month,1,$this->_year));//得到給定的月份應有的天數
        $this->_dayofweek    = date(“w”,mktime(0,0,0,$this->_month,1,$this->_year));//得到給定的月份的 1號 是星期幾
    }
    /**
     * 輸出標題和表頭資訊
     */
    protected function _showTitle()
    {
        $this->_table=”<table><thead><tr align=’center’><th colspan=’7′>”.$this->_currentDate.”</th></tr></thead>”;
        $this->_table.=”<tbody><tr>”;
        $this->_table .=”<td style=’color:red’>星期日</td>”;
        $this->_table .=”<td>星期一</td>”;
        $this->_table .=”<td>星期二</td>”;
        $this->_table .=”<td>星期三</td>”;
        $this->_table .=”<td>星期四</td>”;
        $this->_table .=”<td>星期五</td>”;
        $this->_table .=”<td style=’color:red’>星期六</td>”;
        $this->_table.=”</tr>”;
    }
    /**
     * 輸出日期資訊
     * 根據當前日期輸出日期資訊
     */
    protected function _showDate()
    {
        $nums=$this->_dayofweek 1;
        for ($i=1;$i<=$this->_dayofweek;$i ){//輸出1號之前的空白日期
            $this->_table.=”<td>&nbsp</td>”;
        }
        for ($i=1;$i<=$this->_days;$i ){//輸出天數資訊
            if ($nums%7==0){//換行處理：7個一行
                $this->_table.=”<td>$i</td></tr><tr>”;   
            }else{
                $this->_table.=”<td>$i</td>”;
            }
            $nums ;
        }
        $this->_table.=”</tbody></table>”;
        $this->_table.=”<h3><a href=’?y=”.($this->_year).”&m=”.($this->_month-1).”‘>上一月</a>   “;
        $this->_table.=”<a href=’?y=”.($this->_year).”&m=”.($this->_month 1).”‘>下一月</a></h3>”;
    }
    /**
     * 輸出日曆
     */
    public function showCalendar()
    {
        $this->_showTitle();
        $this->_showDate();
        echo $this->_table;
    }
}
$calc=new Calendar();
$calc->showCalendar();