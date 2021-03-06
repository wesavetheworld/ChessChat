<?php

/**
 * german language file
 */

$this->langVars = array(
// GENERAL
'me'    => 'Ich',
'close' => 'Schließen',

'time.dateformat'   => 'j. M Y',
'time.now'          => 'gerade eben',
'time.oneminuteago' => 'vor einer Minute',
'time.xminutesago'  => 'vor %x Minuten',
'time.onehourago'   => 'vor einer Stunde',
'time.xhoursago'    => 'vor %x Stunden',
'time.yesterday'    => 'gestern',
'time.yesterdayat'  => 'gestern um ',

'form.submit'                       => 'Abschicken',
'form.reset'                        => 'Zurücksetzen',
'form.invalid'                      => 'Bitte korriegieren Sie die markierten Felder!',
'form.invalid.missing'              => 'Diese Feld muss ausgefüllt werden.',
'form.invalid.username'             => 'Ihr Benutzername muss mindestens '
                                     . USERNAME_MIN_LENGTH
                                     . ' Zeichen lang sein.',
'form.invalid.username.used'        => 'Dieser Benutzername ist bereits vergeben.',
'form.invalid.username.nonexistant' => 'Der Benutzername existiert nicht.',
'form.invalid.email'                => 'Keine E-Mail Adresse',
'form.invalid.email.used'           => 'Diese E-Mail Adresse ist bereits in Benutzung.',
'form.invalid.email.confirm'        => 'Ihre E-Mail Adresse stimmt nicht überein.',
'form.invalid.password'             => 'Falsches Passwort',
'form.invalid.password.confirm'     => 'Ihr Passwort stimmt nicht überein.',
'form.invalid.password.insecure'    => 'Ihr Passwort muss mindestens '
                                     . PASSWORD_MIN_LENGTH
                                     . ' Zeichen lang sein.',

// GLOBAL
'site.index'         => 'Startseite',
'site.legalnotice'   => 'Impressum',
'site.contact'       => 'Kontaktinformationen',
'site.menu.settings' => 'Einstellungen',
'site.loggedinas'    => 'Angemeldet als',

// SITES
'legal.name'            => 'Name',
'legal.address'         => 'Addresse',
'legal.nameAndAddress'  => 'Name und Anschrift',
'legal.email'           => 'E-Mail Addresse',
'legal.phone'           => 'Telefon',
'legal.fax'             => 'Fax',
'legal.representatives' => 'Vertretungsberechtigte',
'legal.taxID'           => 'Steuernummer',

'user.name'              => 'Benutzername',
'user.gameCount'         => 'Spiele',
'user.password'          => 'Passwort',
'user.password.confirm'  => 'Passwort wiederholen',
'user.email'             => 'E-Mail Adresse',
'user.email.confirm'     => 'E-Mail Adresse wiederholen',
'user.login'             => 'Anmelden',
'user.logout'            => 'Abmelden',
'user.register'          => 'Registrieren',
'user.profile'           => 'Profil',
'user.settings'          => 'Einstellungen',
'user.settings.language' => 'Sprache',
'user.list'              => 'Benutzerliste',

'game.opponent'         => 'Gegner',
'game.whiteplayer'      => 'Weißer Spieler',
'game.blackplayer'      => 'Schwarzer Spieler',
'game.list'             => 'Spiele',
'game.list.running'     => 'Laufende Spiele',
'game.list.finished'    => 'Beendete Spiele',
'game.list.gotogame'    => 'ansehen',
'game.new'              => 'Neues Spiel',
'game.new.against'      => 'Gegen %opponent spielen',
'game.settings'         => 'Spieleinstellungen',
'game.lastupdate'       => 'Letzte Aktivität',
'game.status'           => 'Spielstatus',
'game.status.yourturn'  => '<strong>Du bist dran!</strong>',
'game.status.nextturn'  => '%u ist dran',
'game.status.won'       => '%u hat gewonnen',
'game.status.draw'      => 'Unentschieden',
'game.status.check'     => ' (Schach)',
'game.status.checkmate' => ' (Schachmatt)',
'game.menu.resign'      => 'Aufgeben',
'game.menu.offerdraw'   => 'Patt anbieten',

'chat.send' => 'Absenden',

'chess.moved' => '<strong>%user</strong> zieht <span class="chesspiece">%piece</span> von <strong>%from</strong> nach <strong>%to</strong>',
'chess.andcaptured' => ' und wirft <span class="chesspiece">%capture</span>',
'chess.andpromoted' => ' und wandelt zu <span class="chesspiece">%promotion</span> um',
'chess.promotion'             => 'Umwandlung',
'chess.promotion.explanation' => 'Durch welche Figur soll der Bauer ersetzt werden?',

'chess.movedandcaptured' => '<strong>%user</strong> zieht <span class="chesspiece">%piece</span> von <strong>%from</strong> nach <strong>%to</strong> und wirft <span class="chesspiece">%capture</span>',

'chess.invalidmove.blocked'     => "Eine andere Figur versperrt den Weg.",
'chess.invalidmove.nopiece'     => "Auf diesem Feld steht keine Figur.",
'chess.invalidmove.notyourturn' => "Du bist nicht dran.",
'chess.invalidmove.owncolor'    => "Eigene Figuren können nicht geworfen werden.",
'chess.invalidmove.bishop'      => "Ein Läufer kann so nicht bewegt werden.",
'chess.invalidmove.king'        => "Ein König kann so nicht bewegt werden.",
'chess.invalidmove.knight'      => "Ein Springer kann so nicht bewegt werden.",
'chess.invalidmove.pawn'        => "Ein Bauer kann so nicht bewegt werden.",
'chess.invalidmove.queen'       => "Eine Dame kann so nicht bewegt werden.",
'chess.invalidmove.rook'        => "Ein Turm kann so nicht bewegt werden.",
'chess.invalidmove.check'       => 'Dein König steht im Schach.',

'exception.404.msg' => 'Diese Seite ist nicht mehr verfügbar.<br /><a href="index.php">Zurück zur Startseite</a>',
'exception.403.msg' => 'Sie haben keinen Zugriff auf diese Seite.<br /><a href="index.php">Zurück zur Startseite</a>',

);
