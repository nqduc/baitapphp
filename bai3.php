<html>
    <head>
    <title>Bài tập Class (Lớp) trong PHP</title>
    </head>
<body>
    <?php 
            class tinh_giai_thua
            {
                protected $_n ;
                public function __construct($n)
            {
                if(!is_int($n))
                    {
                        throw new InvaliArgumentException('Khong phai tham so!');
                    }
                $this->_n = $n;
            }
        public function result()
            {
                $giai_thua = 1;
                for ($i = 1; $i <=$this->_n;$i++)   
            {
                $giai_thua*=$i;
            }
            return $giai_thua;
            }
        }
        $ket_qua= new tinh_giai_thua(5);
        echo $ket_qua->result();
    ?>
</body>
</html>