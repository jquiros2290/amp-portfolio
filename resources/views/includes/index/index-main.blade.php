<main id="content" role="main" class="main commerce-landing">

    @include('includes.index/index-bio')

    @foreach($projects as $project)
        <section class="commerce-hero-content-wrapper center overflow-hidden">
            <a href="{{$project->link}}" class="text-decoration-none block" target="_blank">
                <amp-img class="commerce-hero-image" src="{{asset('images/' . $project->narrow_img)}}" width="750" height="573" layout="responsive" media="(max-width: 52.06rem)" alt="Project IMG" noloading="">
                    <div placeholder="" class="commerce-loader"></div>
                </amp-img>
                <amp-img class="commerce-hero-image" src="{{asset('images/' . $project->wide_img)}}" width="2560" height="800" layout="responsive" media="(min-width: 52.07rem)" alt="Project IMG" noloading="">
                    <div placeholder="" class="commerce-loader"></div>
                </amp-img>
                <div class="commerce-hero-content commerce-hero-content-theme-primary flex justify-center flex-column md-mx-auto md-p0">
                    <div class="commerce-hero-align md-mx-auto">
                        <h2 class="commerce-hero-content-title h4 md-h1 caps md-mb2 md-pl4">{{$project->name}}</h2>
                        <p class="commerce-hero-content-body">{{$project->description}}
                        </p>
                        <div class="ampstart-btn ampstart-btn-secondary caps md-ml4">{{$project->button}}</div>
                    </div>
                </div>
            </a>
        </section>
    @endforeach
</main>