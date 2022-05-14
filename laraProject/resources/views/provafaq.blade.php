@extends('layouts.public')

@section('title', 'Home')

@section('content')
<!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" >

		  <div class="row">
			 <div class="twelve columns">
				 <div class="slider-text">
					  <h1>Free amazing site template<span>.</span></h1>
                                             <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                                enim tellus ultrices elit.
                                             </p>
				 </div>
                                 <div style="height: 200px; text-align: center;">
                                     
                                     <a href="#" class="button" style="margin-top: 5%" >Inizia a cercare!!!</a>
                                     
                                 </div>
			  </div>
		 </div>
		
	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h2>FAQs</h2>
         </div>
      </div>

      <div class="blog-entries">
          @isset($faq1)
         <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">

               <div class="ten columns entry-title pull-right">
                  <h3>PRIMA DOMANDA: {{ $faq1->domanda }}</h3>
               </div>

               <div class="two columns post-meta end">
                  
                  <h3>#{{ $faq1->id }}</h3>
                  
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
                <p>RISPOSTA NUMERO 1: {{ $faq1->risposta }}
               </p>
            </div>
      
         </article> <!-- Entry End -->
         
          <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">

               <div class="ten columns entry-title pull-right">
                  <h3>SECONDA DOMANDA DELLE FAQ</h3>
               </div>

               <div class="two columns post-meta end">
                  
                  <h3>#2</h3>
                  
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
                <p>RISPOSTA NUMERO 2!!!<br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
               deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
               At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
               </p>
            </div>

         </article> <!-- Entry End -->
         
           <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">

               <div class="ten columns entry-title pull-right">
                  <h3>TERZA DOMANDA DELLE FAQ</h3>
               </div>

               <div class="two columns post-meta end">
                  
                  <h3>#3</h3>
                  
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
                <p>RISPOSTA NUMERO 3!!!<br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
               deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
               At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
               </p>
            </div>

         </article> <!-- Entry End -->
         @endisset()
      </div>
         </section>

@endsection
