<?php

/* themes/mytheme/templates/page.html.twig */
class __TwigTemplate_436deb68afd52c4b2ad7d2f6968a55e11f2e26104ccd89fcc5d880430f813beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 60, "block" => 61, "set" => 141);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 61
            echo "  ";
            $this->displayBlock('header', $context, $blocks);
            // line 65
            echo "
  ";
            // line 66
            if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
                // line 67
                echo "    <nav id=\"header-nav-wrap\">
      ";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
                echo "
    </nav>
  ";
            }
            // line 71
            echo "   </header>
";
        }
        // line 73
        echo "
   <!-- home
   ================================================== -->
   <section id=\"home\" data-parallax=\"scroll\" data-image-src=\"";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/hero-bg.jpg\" data-natural-width=\"3000\" data-natural-height=\"2000\">

        <div class=\"overlay\"></div>
        <div class=\"home-content\">        

            <div class=\"row contents\">                     
                <div class=\"home-content-left\">

                    <h3 data-aos=\"fade-up\">Welcome to Dazzle</h3>

                    <h1 data-aos=\"fade-up\">
                        Creative Landing <br>
                        Page to Showcase <br>
                        Your Amazing App.
                    </h1>

                    <div class=\"buttons\" data-aos=\"fade-up\">
                        <a href=\"#download\" class=\"smoothscroll button stroke\">
                            <span class=\"icon-circle-down\" aria-hidden=\"true\"></span>
                            Download App
                        </a>
                        <a href=\"http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=39b54a\" data-lity class=\"button stroke\">
                            <span class=\"icon-play\" aria-hidden=\"true\"></span>
                            Watch Video
                        </a>
                    </div>                                         

                </div>

                <div class=\"home-image-right\">
                    <img src=\"";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/iphone-app-470.png\" 
                        srcset=\"";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/iphone-app-470.png 1x, ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/iphone-app-940.png 2x\"  
                        data-aos=\"fade-up\">
                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class=\"home-social-list\">
            <li>
                <a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class=\"home-scrolldown\">
            <a href=\"#about\" class=\"scroll-icon smoothscroll\">
                <span>Scroll Down</span>
                <i class=\"icon-arrow-right\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </section> <!-- end home -->  

";
        // line 141
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 142
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 143
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 144
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 145
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("") : ("")));
        // line 148
        echo "<section id=\"sign up\">
<div ";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 151
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 152
            echo "    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 155
            echo "  ";
        }
        // line 156
        echo "  ";
        // line 157
        echo "  ";
        if (($context["breadcrumb"] ?? null)) {
            // line 158
            echo "    ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 161
            echo "  ";
        }
        // line 162
        echo "
";
        // line 164
        echo "  ";
        if (($context["action_links"] ?? null)) {
            // line 165
            echo "    ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 168
            echo "  ";
        }
        // line 169
        echo "
";
        // line 171
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 172
            echo "    ";
            $this->displayBlock('help', $context, $blocks);
            // line 175
            echo "  ";
        }
        // line 176
        echo "
";
        // line 178
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 182
        echo "
</div>
</section>

    <!-- about
    ================================================== -->
    <section id=\"about\"  style=\"clear:both;\">

        <div class=\"row about-intro\">

            <div class=\"col-four\">
                <h1 class=\"intro-header\" data-aos=\"fade-up\">About Our App</h1>
            </div>
            <div class=\"col-eight\">
                <p class=\"lead\" data-aos=\"fade-up\">
                    Excepteur enim magna veniam labore veniam sint. Ex aliqua esse proident ullamco voluptate. Nisi nisi nisi aliqua eiusmod dolor dolor proident deserunt occaecat elit Lorem reprehenderit. Id culpa veniam ex aliqua magna elit pariatur do nulla. Excepteur enim magna veniam labore veniam sint.
                </p>
            </div>                       
            
        </div>

        <div class=\"row about-features\">

            <div class=\"features-list block-1-3 block-m-1-2 block-mob-full group\">

                <div class=\"bgrid feature\" data-aos=\"fade-up\">\t

                    <span class=\"icon\"><i class=\"icon-window\"></i></span>            

                    <div class=\"service-content\">\t

                        <h3>Fully Resposive</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>
                        
                    </div> \t         \t 

                    </div> <!-- /bgrid -->

                    <div class=\"bgrid feature\" data-aos=\"fade-up\">\t

                        <span class=\"icon\"><i class=\"icon-image\"></i></span>                          

                    <div class=\"service-content\">\t
                        <h3>Retina Ready</h3>  

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>

                        
                    </div>\t                          

                </div> <!-- /bgrid -->

                <div class=\"bgrid feature\" data-aos=\"fade-up\">

                    <span class=\"icon\"><i class=\"icon-paint-brush\"></i></span>\t\t            

                    <div class=\"service-content\">
                        <h3>Stylish Design</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p> 
                            
                    </div> \t            \t               

                </div> <!-- /bgrid -->

                    <div class=\"bgrid feature\" data-aos=\"fade-up\">

                        <span class=\"icon\"><i class=\"icon-file\"></i></span>\t              

                    <div class=\"service-content\">
                        <h3>Clean Code</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p> 
                        
                    </div>                

                    </div> <!-- /bgrid -->

                <div class=\"bgrid feature\" data-aos=\"fade-up\">

                    <span class=\"icon\"><i class=\"icon-sliders\"></i></span>\t            

                    <div class=\"service-content\">\t
                        <h3>Easy To Customize</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>                            
                    </div>\t               

                </div> <!-- /bgrid -->

                <div class=\"bgrid feature\" data-aos=\"fade-up\">

                    <span class=\"icon\"><i class=\"icon-gift\"></i></span>\t   \t           

                    <div class=\"service-content\">
                        <h3>Free of Charge</h3>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p> 
                            
                    </div>\t               

                </div> <!-- /bgrid -->

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

        <div class=\"row about-how\">
          
            <h1 class=\"intro-header\" data-aos=\"fade-up\">How The App Works?</h1>           

            <div class=\"about-how-content\" data-aos=\"fade-up\">
                <div class=\"about-how-steps block-1-2 block-tab-full group\">

                    <div class=\"bgrid step\" data-item=\"1\">
                        <h3>Sign-Up</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>

                    <div class=\"bgrid step\" data-item=\"2\">
                        <h3>Upload</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>               
               
                    <div class=\"bgrid step\" data-item=\"3\">
                        <h3>Create</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>

                    <div class=\"bgrid step\" data-item=\"4\">
                        <h3>Publish</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>  

                </div>           
           </div> <!-- end about-how-content -->

        </div> <!-- end about-how -->

        <div class=\"row about-bottom-image\">

           <img src=\"";
        // line 334
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/app-screens-1200.png\" 
                srcset=\"images/app-screens-600.png 600w, 
                        images/app-screens-1200.png 1200w, 
                        images/app-screens-2800.png 2800w\" 
                sizes=\"(max-width: 2800px) 100vw, 2800px\"
                alt=\"App Screenshots\" data-aos=\"fade-up\">

        </div>  <!-- end about-bottom-image -->       
        
    </section> <!-- end about -->  
   

    <!-- pricing
    ================================================== -->
    <section id=\"pricing\">
        <div class=\"row pricing-content\">

            <div class=\"col-four pricing-intro\">
                <h1 class=\"intro-header\" data-aos=\"fade-up\">Our Pricing Options</h1>

                <p data-aos=\"fade-up\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. 
                </p>
            </div>

            <div class=\"col-eight pricing-table\">
                <div class=\"row\">

                    <div class=\"col-six plan-wrap\">
                        <div class=\"plan-block\" data-aos=\"fade-up\"> 

                            <div class=\"plan-top-part\">
                                <h3 class=\"plan-block-title\">Lite Plan</h3>
                                <p class=\"plan-block-price\"><sup>\$</sup>25</p>
                                <p class=\"plan-block-per\">Per Month</p>
                            </div>

                            <div class=\"plan-bottom-part\">
                                <ul class=\"plan-block-features\">
                                    <li><span>3GB</span> Storage</li>
                                    <li><span>10GB</span> Bandwidth</li>\t                  
                                    <li><span>5</span> Databases</li>\t\t                  
                                    <li><span>30</span> Email Accounts</li>
                                </ul>

                                <a class=\"button button-primary large\" href=\"\">Get Started</a>
                            </div>  
                     
                        </div>
                    </div> <!-- end plan-wrap -->

                    <div class=\"col-six plan-wrap\">
                        <div class=\"plan-block primary\" data-aos=\"fade-up\">

                            <div class=\"plan-top-part\">
                                <h3 class=\"plan-block-title\">Pro Plan</h3>
                                <p class=\"plan-block-price\"><sup>\$</sup>50</p>
                                <p class=\"plan-block-per\">Per Month</p>
                            </div>

                            <div class=\"plan-bottom-part\">
                                <ul class=\"plan-block-features\">
                                    <li><span>5GB</span> Storage</li>
                                    <li><span>20GB</span> Bandwidth</li>\t                  
                                    <li><span>15</span> Databases</li>\t\t                  
                                    <li><span>70</span> Email Accounts</li>
                                </ul>

                                <a class=\"button button-primary large\" href=\"\">Get Started</a>
                            </div>

                        </div>
                    </div> <!-- end plan-wrap -->

                </div>               
            </div> <!-- end pricing-table -->

        </div> <!-- end pricing-content -->
    </section> <!-- end pricing -->


    <!-- Testimonials Section
    ================================================== -->
    <section id=\"testimonials\">

        <div class=\"row\">
            <div class=\"col-twelve\">
                <h1 class=\"intro-header\" data-aos=\"fade-up\">What They Say About Our App.</h1>
            </div>   \t\t
        </div>   \t

        <div class=\"row owl-wrap\">

            <div id=\"testimonial-slider\"  data-aos=\"fade-up\">

                <div class=\"slides owl-carousel\">

                    <div>
                        <p>
                        Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                        to do what you believe is great work. And the only way to do great work is to love what you do.
                        If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                        </p> 

                        <div class=\"testimonial-author\">
                                <img src=\"";
        // line 438
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/images/avatars/user-02.jpg\" alt=\"Author image\">
                                <div class=\"author-info\">
                                    Steve Jobs
                                    <span class=\"position\">CEO, Apple.</span>
                                </div>
                        </div>                 
                    </div> 

                    <div>
                        <p>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.    
                        </p>

                        <div class=\"testimonial-author\">
                                <img src=\"images/avatars/user-03.jpg\" alt=\"Author image\">
                                <div class=\"author-info\">
                                    John Doe
                                    <span>CEO, ABC Corp.</span>
                                </div>
                        </div>                                         
                    </div> 

                </div> <!-- end slides -->

            </div> <!-- end testimonial-slider -->         
            
        </div> <!-- end flex-container -->

    </section> <!-- end testimonials -->
    

    <!-- download
    ================================================== -->
    <section id=\"download\">

        <div class=\"row\">
            <div class=\"col-full\">
                <h1 class=\"intro-header\"  data-aos=\"fade-up\">Download Our App Today!</h1>

                <p class=\"lead\" data-aos=\"fade-up\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>

                <ul class=\"download-badges\">
                    <li><a href=\"#\" title=\"\" class=\"badge-appstore\"  data-aos=\"fade-up\">App Store</a></li>
                    <li><a href=\"#\" title=\"\" class=\"badge-googleplay\" data-aos=\"fade-up\">Play Store</a></li>
                </ul>

            </div>
        </div>

    </section> <!-- end download -->    


    <!-- footer
    ================================================== -->
    <footer>

        <div class=\"footer-main\">
            <div class=\"row\">  

                <div class=\"col-three md-1-3 tab-full footer-info\">            

                    <div class=\"footer-logo\"></div>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                    </p>

                    <ul class=\"footer-social-list\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-facebook-square\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class=\"col-three md-1-3 tab-1-2 mob-full footer-contact\">

                    <h4>Contact</h4>

                    <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA <br>
                    94043 US<br>\t\t        
                    </p>

                    <p>
                    someone@dazzlesite.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class=\"col-two md-1-3 tab-1-2 mob-full footer-site-links\">

                    <h4>Site Links</h4>

                    <ul class=\"list-links\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Blog</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">Terms</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                    </ul>\t      \t\t
                            
                </div> <!-- end footer-site-links --> 

                <div class=\"col-four md-1-2 tab-full footer-subscribe\">

                    <h4>Our Newsletter</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class=\"subscribe-form\">
                
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mc-email\" placeholder=\"Email Address\" required=\"\"> 
                
                            <input type=\"submit\" name=\"subscribe\" value=\"Send\">
                
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                
                        </form>

                    </div>\t      \t\t
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class=\"footer-bottom\">

      \t<div class=\"row\">

      \t\t<div class=\"col-twelve\">
\t      \t\t<div class=\"copyright\">
\t\t         \t<span>© Copyright Dazzle 2018.</span> 
\t\t         \t<span>Design by <a href=\"http://www.styleshout.com/\">styleshout</a></span>\t\t         \t
\t\t         </div>

\t\t         <div id=\"go-top\">
\t\t            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\"><i class=\"icon-arrow-up\"></i></a>
\t\t         </div>         
\t      \t</div>

      \t</div> <!-- end footer-bottom -->     \t

      </div>

    </footer>

    <div id=\"preloader\"> 
    \t<div id=\"loader\"></div>
    </div> 

";
    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "    <header id=\"header\" class=\"row\">   
      ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  ";
    }

    // line 152
    public function block_highlighted($context, array $blocks = array())
    {
        // line 153
        echo "      <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
    ";
    }

    // line 158
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 159
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
    ";
    }

    // line 165
    public function block_action_links($context, array $blocks = array())
    {
        // line 166
        echo "      <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
    ";
    }

    // line 172
    public function block_help($context, array $blocks = array())
    {
        // line 173
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
    ";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo "    <a id=\"main-content\"></a>
      ";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 180,  711 => 179,  708 => 178,  701 => 173,  698 => 172,  691 => 166,  688 => 165,  681 => 159,  678 => 158,  671 => 153,  668 => 152,  662 => 63,  659 => 62,  656 => 61,  475 => 438,  368 => 334,  214 => 182,  211 => 178,  208 => 176,  205 => 175,  202 => 172,  199 => 171,  196 => 169,  193 => 168,  190 => 165,  187 => 164,  184 => 162,  181 => 161,  178 => 158,  175 => 157,  173 => 156,  170 => 155,  167 => 152,  164 => 151,  160 => 149,  157 => 148,  155 => 145,  154 => 144,  153 => 143,  152 => 142,  151 => 141,  114 => 107,  110 => 106,  77 => 76,  72 => 73,  68 => 71,  62 => 68,  59 => 67,  57 => 66,  54 => 65,  51 => 61,  49 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mytheme/templates/page.html.twig", "C:\\xampp\\htdocs\\pttgc\\themes\\mytheme\\templates\\page.html.twig");
    }
}
