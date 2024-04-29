<?php
  $titre = 'Blue Jean Blues';
  ob_start();

  class Song {
    public $title;
    public $techTitle; // utilisé pour le css et js
    public $singer;
    public $bpm;
    public $tonalite;
    public $tonaliteBJB;
    public $linkMP3;
    public $linkMP3BJB;
    public $linkLyrics;
    public $linkGrille;
    
    function __construct() {
      $this->bpm = "?";
      $this->linkGrille = "(non-disponible pour le moment)";
    }
  }

  $song1 = new song();
  $song1->title = "Ain't no sunshine";
  $song1->singer = "Bill Withers";
  $song1->bpm = "";
  $song1->tonalite = "";
  $song1->tonaliteBJB = "";
  $song1->linkMP3 = "";
  $song1->linkMP3BJB = "";
  $song1->linkLyrics = "";

  $song2 = new Song();
  $song2->title = "";
  $song2->singer = "";
  $song2->bpm = "";
  $song2->tonalite = "";
  $song2->tonaliteBJB = "";
  $song2->linkMP3 = "";
  $song2->linkMP3BJB = "";
  $song2->linkLyrics = "";
  
  $song3 = new Song();
  $song4 = new Song();
  $song5 = new Song();
  $song6 = new Song();
  $song7 = new Song();
  $song8 = new Song();
  $song9 = new Song();
  $song10 = new Song();

  $songs = [$song1, $song9, $song6, $song3, $song5, $song4, $song7, $song8, $song2, $song10];

?>

<div id="songs-list" class="py-40 flex flex-column">

<?php foreach($songs as $song) { ?>

  <div class="song-card">
    <div class="song-title tc h6"><?= strtoupper($song->title) ?> - <?= $song->singer ?></div>
    <div class="song-infos flex flex-row jcsb">
      <div>BPM : 120</div>
      <div>Tonalit&eacute; d'origine : D#m</div>
      <div>Tonalit&eacute; BJB : F#m</div>
    </div>
    <div class="song-mp3 flex flex-row jcsa">
      <div>
        <audio controls src="assets/mp3/Aint_no_sunshine.mp3"></audio><br>
        <a href="assets/mp3/Aint_no_sunshine.mp3" target="_blank" class="link">T&eacute;l&eacute;charger MP3 Original (en D#m)</a>
      </div>
      <div>
      <audio controls src="assets/mp3/Aint_no_sunshine-3.mp3"></audio><br>
        <a href="assets/mp3/Aint_no_sunshine-3.mp3" target="_blank" class="link">T&eacute;l&eacute;charger MP3 BJB (en F#m)</a></div>
    </div>
    <div class="song-files">
      <div class="tc"><a href="assets/paroles/Aint_no_sunshine.pdf" target="_blank" class="link">PAROLES Ain't no sunshine</a></div>
      <div class="tc">GRILLE <?= $song->linkGrille ?></div>
    </div>
  </div>

<?php } ?>

</div>

<?php
$contenu = ob_get_clean();
require_once('layout.php');