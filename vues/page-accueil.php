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
  $song1->bpm = "75";
  $song1->tonalite = "D#m";
  $song1->tonaliteBJB = "F#m";
  $song1->linkMP3 = "Aint_no_sunshine";
  $song1->linkMP3BJB = "Aint_no_sunshine-3";
  $song1->linkLyrics = "Aint_no_sunshine";

  $song2 = new Song();
  $song2->title = "Bad Moon Rising";
  $song2->singer = "C.C.R.";
  $song2->bpm = "144";
  $song2->tonalite = "D";
  $song2->tonaliteBJB = "B";
  $song2->linkMP3 = "Bad_moon_rising";
  $song2->linkMP3BJB = "Bad_moon_rising-3";
  $song2->linkLyrics = "Bad_moon_rising";
  
  $song3 = new Song();
  $song3->title = "Blue Jean Blues";
  $song3->singer = "ZZ TOP";
  $song3->bpm = "66";
  $song3->tonalite = "Bm";
  $song3->tonaliteBJB = "Bm";
  $song3->linkMP3 = "Blue_jean_blues";
  $song3->linkMP3BJB = "";
  $song3->linkLyrics = "Blue_jean_blues";

  $song4 = new Song();
  $song4->title = "Blue Suede Shoes";
  $song4->singer = "Elvis";
  $song4->bpm = "188";
  $song4->tonalite = "A";
  $song4->tonaliteBJB = "A";
  $song4->linkMP3 = "Blue_suede_shoes";
  $song4->linkMP3BJB = "";
  $song4->linkLyrics = "Blue_suede_shoes";

  $song5 = new Song();
  $song5->title = "Dead Flowers";
  $song5->singer = "Rollings Stones";
  $song5->bpm = "130";
  $song5->tonalite = "D";
  $song5->tonaliteBJB = "D";
  $song5->linkMP3 = "Dead_flowers";
  $song5->linkMP3BJB = "";
  $song5->linkLyrics = "Dead_flowers";

  $song6 = new Song();
  $song6->title = "Dirty old town";
  $song6->singer = "The Pogues";
  $song6->bpm = "123";
  $song6->tonalite = "G (couplets)";
  $song6->tonaliteBJB = "G";
  $song6->linkMP3 = "Dirty_old_town";
  $song6->linkMP3BJB = "";
  $song6->linkLyrics = "Dirty_old_town";

  $song7 = new Song();
  $song7->title = "Dock of the bay";
  $song7->singer = "Otis Redding";
  $song7->bpm = "104";
  $song7->tonalite = "G";
  $song7->tonaliteBJB = "G";
  $song7->linkMP3 = "Dock_of_the_bay";
  $song7->linkMP3BJB = "";
  $song7->linkLyrics = "Dock_of_the_bay";

  $song8 = new Song();
  $song8->title = "Don't be cruel";
  $song8->singer = "Elvis";
  $song8->bpm = "85";
  $song8->tonalite = "D";
  $song8->tonaliteBJB = "C";
  $song8->linkMP3 = "Dont_be_cruel";
  $song8->linkMP3BJB = "Dont_be_cruel-2";
  $song8->linkLyrics = "Dont_be_cruel";
  
  $song9 = new Song();
  $song9->title = "Honky Tonk Women";
  $song9->singer = "Rolling Stones";
  $song9->bpm = "120";
  $song9->tonalite = "G";
  $song9->tonaliteBJB = "G";
  $song9->linkMP3 = "Honky_tonk_women";
  $song9->linkMP3BJB = "";
  $song9->linkLyrics = "Honky_tonk_women";

  $song10 = new Song();
  $song10->title = "Horse with no name";
  $song10->singer = "America";
  $song10->bpm = "123";
  $song10->tonalite = "Em";
  $song10->tonaliteBJB = "???";
  $song10->linkMP3 = "Horse";
  $song10->linkMP3BJB = "";
  $song10->linkLyrics = "Horse_with_no_name";

  $song11 = new Song();
  $song11->title = "Knocking on heaven's door";
  $song11->singer = "B.Dylan (Gun's...)";
  $song11->bpm = "66";
  $song11->tonalite = "G";
  $song11->tonaliteBJB = "G";
  $song11->linkMP3 = "Knocking_on_heavens_door";
  $song11->linkMP3BJB = "";
  $song11->linkLyrics = "Knocking_on_heavens_door";

  $song12 = new Song();
  $song12->title = "Mustang Sally";
  $song12->singer = "Wilson Picket";
  $song12->bpm = "110";
  $song12->tonalite = "C";
  $song12->tonaliteBJB = "C";
  $song12->linkMP3 = "";
  $song12->linkMP3BJB = "";
  $song12->linkLyrics = "Mustang_sally";

  $song13 = new Song();
  $song13->title = "Sweet Home Chicago";
  $song13->singer = "Blues Brothers";
  $song13->bpm = "110";
  $song13->tonalite = "C";
  $song13->tonaliteBJB = "C";
  $song13->linkMP3 = "Sweet_home_chicago";
  $song13->linkMP3BJB = "";
  $song13->linkLyrics = "Sweet_home_chicago";

  $song14 = new Song();
  $song14->title = "Sweet Virginia";
  $song14->singer = "Rolling Stones";
  $song14->bpm = "107";
  $song14->tonalite = "D";
  $song14->tonaliteBJB = "C";
  $song14->linkMP3 = "Sweet_virginia";
  $song14->linkMP3BJB = "Sweet_virginia-2";
  $song14->linkLyrics = "Sweet_virginia";

  $song15 = new Song();
  $song15->title = "Sympathy for the devil";
  $song15->singer = "Rolling Stones";
  $song15->bpm = "116";
  $song15->tonalite = "E";
  $song15->tonaliteBJB = "E";
  $song15->linkMP3 = "Sympathy_for_the_devil_live";
  $song15->linkMP3BJB = "";
  $song15->linkLyrics = "Sympathy_for_the_devil";

  $song16 = new Song();
  $song16->title = "Twist and shout";
  $song16->singer = "Beatles";
  $song16->bpm = "";
  $song16->tonalite = "D";
  $song16->tonaliteBJB = "A";
  $song16->linkMP3 = "";
  $song16->linkMP3BJB = "";
  $song16->linkLyrics = "Twist_and_shout";

  $song17 = new Song();
  $song17->title = "Wild horses";
  $song17->singer = "Rolling Stones";
  $song17->bpm = "";
  $song17->tonalite = "Bm (couplets)";
  $song17->tonaliteBJB = "Bm";
  $song17->linkMP3 = "Wild_horses";
  $song17->linkMP3BJB = "";
  $song17->linkLyrics = "Wild_horses";

  $song18 = new Song();
  $song18->title = "You never can tell";
  $song18->singer = "Chuck Berry";
  $song18->bpm = "";
  $song18->tonalite = "C";
  $song18->tonaliteBJB = "A";
  $song18->linkMP3 = "You_never_can_tell";
  $song18->linkMP3BJB = "You_never_can_tell-3";
  $song18->linkLyrics = "You_never_can_tell";


  $songs = [$song1, $song2, $song3, $song4, $song5, $song6, $song7, $song8, $song9, $song10, $song11, $song12, $song13, $song14, $song15, $song16, $song17, $song18];

?>

<div class="playlists tc py-30">
  Ecouter la PLAYLIST sur 
  <a href="https://open.spotify.com/playlist/2l3CvIUG5ewr8DYoOPOnmc?si=0649b4b24ef34679" target="_blank" class="link">SPOTIFY</a>.
</div>

<div id="songs-list" class="py-40 flex flex-column">

<?php 

  foreach($songs as $song) { 

?>
  <div class="song-card">
      <div class="song-title tc h6"><?= strtoupper($song->title) ?> - <?= $song->singer ?></div>
      <div class="song-infos flex flex-row jcsb">
        <div>BPM : <?= $song->bpm ?></div>
        <div>Tonalit&eacute; d'origine : <?= $song->tonalite ?></div>
        <div>Tonalit&eacute; BJB : <b><?= $song->tonaliteBJB ?></b></div>
      </div>
      <div class="song-mp3 flex flex-row jcsa">
        <?php if($song->linkMP3 !== "") { ?>  
        <div>
          <audio controls src="assets/mp3/<?= $song->linkMP3 ?>.mp3"></audio><br>
          <a href="assets/mp3/<?= $song->linkMP3 ?>.mp3" target="_blank" class="link">T&eacute;l&eacute;charger MP3 Original (en <?= $song->tonalite ?>)</a>
        </div>
        <?php } ?>
        <?php if($song->linkMP3BJB !== "") { ?>
        <div>
          <audio controls src="assets/mp3/<?= $song->linkMP3BJB ?>.mp3"></audio><br>
          <a href="assets/mp3/<?= $song->linkMP3BJB ?>.mp3" target="_blank" class="link">T&eacute;l&eacute;charger MP3 BJB (en <?= $song->tonaliteBJB ?>)</a>
        </div>
        <?php } ?>
        <?php if($song->linkMP3BJB === "" && $song->linkMP3 === "") { ?>
          <div>Pas de MP3 pour le moment, <a href="#playlist-onpage" class="link">écouter sur Spotify</a></div>
        <?php } ?>
      </div>
      <div class="song-files">
      <?php if($song->linkLyrics !== "") { ?>
        <div class="tc"><a href="assets/paroles/<?= $song->linkLyrics ?>.pdf" target="_blank" class="link">PAROLES</a></div>
      <?php } ?>
        <div class="tc">GRILLE <?= $song->linkGrille ?></div>
      </div>
  </div>

<?php } ?>

</div>

<div id="playlist-onpage">
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2l3CvIUG5ewr8DYoOPOnmc?utm_source=generator" width="96%" height="552" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>

<?php
$contenu = ob_get_clean();
require_once('layout.php');