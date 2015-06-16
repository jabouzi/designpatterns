<?php

include_once('Disk.php');
include_once('Monitor.php');
include_once('CD.php');

$computer = new Computer();

$computer = new Disk($computer);
$computer = new Monitor($computer);
$computer = new CD($computer);
//$computer = new CD($computer);

echo $computer->description()."\n";

 
// Interface pour rendre un objet affichable
interface Affichable {
	public function affiche();
}
 
// Classe contenant un message affichable
class Message implements Affichable {
 
	protected $message = '';
 
	public function __construct($message) {
		$this->message = $message;
	}
 
	public function affiche() {
		echo $this->message;
	}
 
}
 
// Une classe abstraite de décoration de message affichable
abstract class DecorateurDeMessage implements Affichable {
 
	protected $messageDecore = null;
 
	public function __construct(Affichable $messageDecore) {
		$this->messageDecore = $messageDecore;
	}
}
 
// Une classe pour "décorer" un message en gras
class MessageEnGras extends DecorateurDeMessage {
 
	public function affiche() {
		echo '<strong>';
		$this->messageDecore->affiche();
		echo '</strong>';
	}
}
 
// Une classe pour "décorer" un message en italique
class MessageEnItalique extends DecorateurDeMessage {
 
	public function affiche() {
		echo '<em>';
		$this->messageDecore->affiche();
		echo '</em>';
	}
}
 
// Création du message
$message = new Message('le message');
 
// On met le message en gras et en italique
$messageDecore = new MessageEnItalique( new MessageEnGras( $message ) );
// On affiche le message décoré
$messageDecore->affiche();
