<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  md-flex flex-column justify-content items-center justify-center" layout="nodisplay">
    <div class="flex justify-start items-center ampstart-sidebar-header">
        <div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
    </div>
    <nav class="ampstart-sidebar-nav ampstart-nav">
        <ul class="list-reset m0 p0 ampstart-label">
            <li>
                <a href="landing.amp.html" class="text-decoration-none block 22">
                    <amp-img src="{{asset('images/logo-4.png')}}" width="679" height="275" layout="responsive" class="ampstart-sidebar-nav-image inline-block mb4" alt="Company logo" noloading="">
                        <div placeholder="" class="commerce-loader"></div>
                    </amp-img>
                </a>
            </li>
            <li class="ampstart-nav-item "><a class="ampstart-nav-link" href="#">Check</a></li>
            <li class="ampstart-nav-item "><a class="ampstart-nav-link" href="#">Back</a></li>
            <li class="ampstart-nav-item "><a class="ampstart-nav-link" href="#">Soon</a></li>
        </ul>
    </nav>
    <h3 class="h7 block pt3">follow me</h3>
    <ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
        <li>
            <a href="https://www.linkedin.com/in/justin-quiros/" target="_blank" rel="noopener" class="inline-block p1" aria-label="Link to AMP HTML Linkedin">
                <amp-img src="{{asset('images/linkedin.png')}}"
                        width="24"
                        height="24"
                    alt="Linkedin"></amp-img>
                </a>
            </li>
            <li>
                <a href="https://github.com/jquiros2290" target="_blank" rel="noopener" class="inline-block p1" aria-label="Link to AMP HTML Linkedin">
                    <amp-img src="{{asset('images/github.png')}}"
                        width="45"
                        height="24"
                    alt="Linkedin"></amp-img>
                </a>
            </li>
            
        </ul>
    </amp-sidebar>