<?php
session_start();
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'af'], true)) { $_SESSION['lang'] = $_GET['lang']; }
$lang = $_SESSION['lang'] ?? 'en';
$T = [
 'en' => [
  'home'=>'Home','about'=>'About','contact'=>'Contact','subjects'=>'Subjects','book'=>'Book a Session','hours'=>'Tutoring Hours','dark'=>'Dark mode','top'=>'Back to top','skip'=>'Skip to content',
  'h1'=>'Pass your modules with a tutor who has been there','tag'=>'Affordable peer tutoring for Vaal University of Technology students: online or on campus.','cta1'=>'See subjects','cta2'=>'Book a session',
  'why'=>'Why students choose TutorLink','w1'=>'Peer tutors','w1d'=>'Senior students who passed the module with 70% or more.','w2'=>'Flexible times','w2d'=>'Evening and weekend slots that fit your timetable.','w3'=>'Fair prices','w3d'=>'From R60 per hour, with group discounts.',
  'sub_t'=>'Subjects and prices','search'=>'Search subjects','all'=>'All','online'=>'Online','campus'=>'On campus','subject'=>'Subject','mode'=>'Mode','price'=>'Price per hour',
  'quote'=>'My Programming mark went from 48% to 71% after six sessions.','quote_by'=>'Naledi, 2nd-year IT student',
  'links'=>'Useful study links',
  'about_h1'=>'About TutorLink VUT','about_p'=>'TutorLink started in 2025 when a group of IT students noticed how many classmates struggled alone. We match first- and second-year students with trained peer tutors.',
  'mission'=>'How it works','m1'=>'Choose your subject and preferred mode.','m2'=>'Send a booking request.','m3'=>'Meet your tutor and start learning.',
  'team'=>'Meet the tutors','name'=>'Name','spec'=>'Specialty','faq'=>'Frequently asked questions','faq1'=>'How do I pay?','faq1a'=>'Pay by EFT or cash after your first session.','faq2'=>'Can friends join my session?','faq2a'=>'Yes. Groups of up to four share the hourly price.',
  'contact_h1'=>'Book a session','fname'=>'Full name','email'=>'Email address','msg'=>'Subject and preferred time','send'=>'Send request','ok'=>'Thank you! A tutor will contact you within one working day.','err'=>'Please correct the highlighted fields.',
  'find'=>'Find us','rights'=>'All rights reserved.','follow'=>'Follow us','quick'=>'Quick links'
 ],
 'af' => [
  'home'=>'Tuis','about'=>'Oor Ons','contact'=>'Kontak','subjects'=>'Vakke','book'=>'Bespreek ’n Sessie','hours'=>'Tutoruurtjies','dark'=>'Donker modus','top'=>'Terug bo','skip'=>'Slaan oor na inhoud',
  'h1'=>'Slaag jou modules met ’n tutor wat dit reeds gedoen het','tag'=>'Bekostigbare portuurtutoring vir Vaal Universiteit van Tegnologie-studente: aanlyn of op die kampus.','cta1'=>'Sien vakke','cta2'=>'Bespreek ’n sessie',
  'why'=>'Hoekom studente TutorLink kies','w1'=>'Portuurtutors','w1d'=>'Senior studente wat die module met 70% of meer geslaag het.','w2'=>'Buigsame tye','w2d'=>'Aand- en naweekgleuwe wat by jou rooster pas.','w3'=>'Billike pryse','w3d'=>'Vanaf R60 per uur, met groepsafslag.',
  'sub_t'=>'Vakke en pryse','search'=>'Soek vakke','all'=>'Almal','online'=>'Aanlyn','campus'=>'Op kampus','subject'=>'Vak','mode'=>'Modus','price'=>'Prys per uur',
  'quote'=>'My Programmering-punt het van 48% na 71% gegaan ná ses sessies.','quote_by'=>'Naledi, 2de-jaar IT-student',
  'links'=>'Nuttige studieskakels',
  'about_h1'=>'Oor TutorLink VUT','about_p'=>'TutorLink het in 2025 begin toe ’n groep IT-studente opgemerk het hoeveel klasmaats alleen sukkel. Ons koppel eerste- en tweedejaarstudente aan opgeleide portuurtutors.',
  'mission'=>'Hoe dit werk','m1'=>'Kies jou vak en voorkeurmodus.','m2'=>'Stuur ’n besprekingsversoek.','m3'=>'Ontmoet jou tutor en begin leer.',
  'team'=>'Ontmoet die tutors','name'=>'Naam','spec'=>'Spesialiteit','faq'=>'Gereelde vrae','faq1'=>'Hoe betaal ek?','faq1a'=>'Betaal per EFT of kontant ná jou eerste sessie.','faq2'=>'Kan vriende by my sessie aansluit?','faq2a'=>'Ja. Groepe van tot vier deel die uurprys.',
  'contact_h1'=>'Bespreek ’n sessie','fname'=>'Volle naam','email'=>'E-posadres','msg'=>'Vak en voorkeurtyd','send'=>'Stuur versoek','ok'=>'Dankie! ’n Tutor kontak jou binne een werksdag.','err'=>'Korrigeer asseblief die gemerkte velde.',
  'find'=>'Vind ons','rights'=>'Alle regte voorbehou.','follow'=>'Volg ons','quick'=>'Vinnige skakels'
 ]
];
function t($k) { global $T, $lang; return htmlspecialchars($T[$lang][$k] ?? $k, ENT_QUOTES, 'UTF-8'); }
