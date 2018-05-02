<?php
    // $isbn = array("978-1594489501", "979-1594329501", "980-1594489213", "985-1518789501", "980-1534592187");
    // $judul = array("Angels adn Demon", "The Da Vinci Code", "Fantastic Beast and Where to Find Them", "Harry Potter and The Cursed Child", "The Lord if the Rings");
    // $pengarang = array("Dan Brown", "Dan Brown", "J.K. Rowling", "J.K. Rowling", "J.R.R. Tolkien");
    // $penerbit = array("Pocket Books", "Doubleday", "Bloomsbury", "Palace", "Allen and Unwin");
    // $harga = array("120000", "94000", "154000", "184000", "130000");

    // for ($i=0; $i < 5; $i++) { 
    //     echo "isbn = " . $isbn[$i] . "<br>";
    //     echo "judul = " . $judul[$i] . "<br>";
    //     echo "pengarang = " . $pengarang[$i] . "<br>";
    //     echo "penerbit = " . $penerbit[$i] . "<br>";
    //     echo "harga = " . $harga[$i] . "<br>";
    //     echo "<br>";
    // }
?>



<?php
$buku = array(
    array("isbn"=>"978-1594489501","judul"=>"Angles and Demons","pengarang"=>"Dan Brown","penerbit"=>"Pocket Books","harga"=>120000),
    array("isbn"=>"979-1594329501","judul"=>"The Da Vinci Code","pengarang"=>"Dan Brown","penerbit"=>"Doubleday","harga"=>94000),
    array("isbn"=>"980-1594489213","judul"=>"Fantastic Beast an Where to Find Them","pengarang"=>"J.K. Rowling","penerbit"=>"Bloomsbury","harga"=>154000),
    array("isbn"=>"985-1518789501","judul"=>"Harry Potters and the Cursed Child","pengarang"=>"J.K. Rowling","penerbit"=>"Palace","harga"=>184000),
    array("isbn"=>"978-1594489501","judul"=>"The Lord of the Rings","pengarang"=>"J.R.R. Tolkien","penerbit"=>"Allen and Unwin","harga"=>130000)
);

foreach($buku as $books) {
    echo "ISBN = ".$books["isbn"] . "<br>";
    echo "Judul = ".$books["judul"] . "<br>";
    echo "Pengarang = ".$books["pengarang"] . "<br>";
    echo "Penerbit = ".$books["penerbit"] . "<br>";
    echo "Harga = ".$books["harga"] . "<br>";
    echo "<br>";
}
?>


