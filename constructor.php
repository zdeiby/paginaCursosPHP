<?php class Texto {
    public $text;
    public $title;
    //public function __construct($text){
   //     $this->text = $text;
   // }

    public function textoEnviar($texto, $title){
        $this->text=$texto;
        $this->title=$title;
    }

}
$info= new Texto();


?>

<script>
  var data = localStorage.getItem('miVariable');

  // Envía los datos al servidor PHP
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'profile.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Actualizar el contenido del elemento "respuesta" en la página
      document.getElementById('respuesta').innerHTML = xhr.responseText;
    }
  };
  xhr.send('data=' + encodeURIComponent(data));
</script>