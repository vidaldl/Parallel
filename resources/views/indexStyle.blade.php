<style>
    .portfolio h2 {
    color: #3742fa;
    margin-bottom: 25px;
    }

    .portfolio-grid {
    margin-top: 65px;
    }

    .portfolio-grid .row {
    margin: 0;
    }

    .portfolio-grid .row > div {
    padding: 0;
    }

    .portfolio-grid .row > div .card img {
    width: 100%;

    }
    .portfolio-grid .row > div .card {

    margin-bottom: 0px;
    }
    /* BUTTON STYLE */
    .btn {
      background-color: {{$styles[0]->button_primary}};
    }

    .btn:hover {
      background-color: {{$styles[0]->button_secondary}};
    }

    .button {
      background-color: {{$styles[0]->button_primary}};
    }

    .button:hover {
      background-color: {{$styles[0]->button_secondary}} !important;
    }

    #contact .form button[type="submit"] {
      background: {{$styles[0]->button_primary}};
    }
    #contact .form button[type="submit"]:hover {
      background: {{$styles[0]->button_secondary}};
    }

    /* PRIMARY COLOR STYLES */
    .h1color {
      color: {{$styles[0]->primary_color}};
    }



    .btn-ghost:hover, #articuloTitle {

      color: {{$styles[0]->primary_color}};
    }
    .scrolltop {
      background: {{$styles[0]->primary_color}};
    }
    #header {
      background: {{$styles[0]->primary_color}};
    }
    .nav-menu ul li:hover {
      background: {{$styles[0]->primary_color}};
    }
    #mobile-nav ul .menu-has-children i.fa-chevron-up {
      color: {{$styles[0]->primary_color}};
    }
    #mobile-nav ul .menu-item-active {
      color: {{$styles[0]->primary_color}};
    }
    .stats-col .circle {
      border: 6px solid {{$styles[0]->primary_color}};
    }

    .feature-col .feature-icon {
      background: {{$styles[0]->primary_color}};
    }
    .cta {
      background-color: {{$styles[0]->primary_color}};
    }
    .portfolio h1 {
      color: {{$styles[0]->primary_color}};
    }
    .infoSlider h2 {
      margin-bottom: 25px;


    }
    .team h2 {
      color: {{$styles[0]->primary_color}};
    }
    .team .card:hover .card-title-wrap {
      background-color: {{$styles[0]->primary_color}};
    }

    #contact .info i {
      color: {{$styles[0]->primary_color}};
    }
    #contact .form #sendmessage {
      color: {{$styles[0]->primary_color}};
      border-color: {{$styles[0]->primary_color}};
    }
    .site-footer .bottom .list-inline a:hover {
      color: {{$styles[0]->primary_color}};
    }
    .site-footer .credits a {
      color: {{$styles[0]->primary_color}};
    }

/* BACKGROUND */
.background::after {
  background: {{$styles[0]->primary_color}};
}

.pricing-features {
  color: {{$styles[0]->primary_color}};
}



.pricing-button {
  color: #fff;
  background-color: {{$styles[0]->button_primary}};
}

.pricing-button:hover,
.pricing-button:focus {
  color: #fff;
  background-color: {{$styles[0]->button_secondary}};

}


.blog-home3 .bg-success-gradiant {
  background: {{$styles[0]->button_primary}};

}

.blog-home3 a.link:hover {
    color: {{$styles[0]->button_secondary}};
}

/*Background Colors*/
#servicios, #servicios .feature-col .card {
  background-color: {{$contenidosection2s[0]->back_color}};
}



#infoSlider {
  background-color: {{$info_slider_texts[0]->back_color}};
}

.pricing {
  background-color: {{$pricings[0]->back_color}};
}

#articulos, #articulos .card {
  background-color: {{$contenidosection4s[0]->back_color}};
}

#contact {
  background-color: {{$contenidosection5s[0]->back_color}};
}
</style>
