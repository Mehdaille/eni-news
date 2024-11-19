<?php get_header(); ?>
<body>
    <header>
        <a href="index.html" title="Accueil"><img src="images/eni_logo.png" alt="Logo" title="Logo"></a>
	</header>	  
    <nav>
        <ul id="menu">
           <li>
               <a href="index.html" title="Accueil">Accueil</a>
           </li>
           <li>
              <a href="france.html" title="France">France</a>
           </li>
           <li>
              <a href="international.html" title="International">International</a>
           </li>
		   <li>
              <a href="faits_divers.html" title="Faits divers">Faits divers</a>
           </li>
		   <li>
              <a href="sports.html" title="Sports">Sports</a>
           </li>
        </ul>     
    </nav>    
	<!--
    <div class="image">
	    <img src="images/photo.jpg" alt="Photo (Alt)" title="Photo" class="img-fluid">	
    </div>
	-->

<?php get_sidebar(); ?>
	
<div id="gauche">
   <h2>Article 1</h2>
   <div>Texte de l'article 1 (ou résumé/extrait)</div>
   <hr>
   
   <h2>Article 2</h2>
   <div>Texte de l'article 2 (ou résumé/extrait)</div>
   <hr>
   
   <h2>Article 3</h2>
   <div>Texte de l'article 3 (ou résumé/extrait)</div>
   <hr>
   
   <!-- Articles suivants (+ pagination) -->   
</div> <!-- #gauche -->
<?php get_footer(); ?>