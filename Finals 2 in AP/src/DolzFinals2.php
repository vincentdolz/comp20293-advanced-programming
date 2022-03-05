<?php

class DolzFinals2
{
    private $yourname;
    private $yourage;
    private $yourfavecolor;

    public function setName($yourname)
    {
        $this->yourname = $yourname;
    }

    public function setAge($yourage)
    {
        $this->yourage = $yourage;
    }

    public function setFaveColor($yourfavecolor)
    {
        $this->yourfavecolor = $yourfavecolor;
    }

    public function setTogetherInput($yourname,$yourage,$yourfavecolor)
    {
        $this->yourname = $yourname;
        $this->yourage = $yourage;
        $this->yourfavecolor = $yourfavecolor;

    }


    public function getName()
    {
        if(!ctype_alpha($this->yourname))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->yourname;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->yourage))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->yourage;
    }
      
    public function getFaveColor()
    {
        if(!ctype_alpha($this->yourfavecolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->yourfavecolor;
    }

    public function getTogetherInput()
    {
        return $this->yourname;
        return $this->yourage;
        return $this->yourfavecolor;
    }

}