@extends('main')

@section('title', '- Informazione di Marca')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded banner-rivista">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">L'ultimo numero della rivista è online</h1>
        <p class="lead my-3">Scarica la rivista in formato PDF e rimani mensilmente aggiornato con Treviso30News sulla Marca Trevigiana</p>
        <button type="button" class="btn btn-light">Scarica il PDF</button>
    </div>
</div>

<!-- LATEST POSTS -->
<div class="latest-posts">

</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Featured post</a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="images/example-img.jpg" alt="Card image cap">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">Post title</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>

        <div class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis
                consectetur purus sit amet fermentum.</p>
            <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Heading</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                <li>Donec id elit non mi porta gravida at eget metus.</li>
                <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
                <li>Vestibulum id ligula porta felis euismod semper.</li>
                <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
        </div><!-- /.blog-post -->

        <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis
                consectetur purus sit amet fermentum.</p>
            <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        </div><!-- /.blog-post -->

        <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                <li>Donec id elit non mi porta gravida at eget metus.</li>
                <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        </div><!-- /.blog-post -->

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3">
            <h4 class="font-italic">Sponsors</h4>
            <div class="sponsor-list">
                <a href="#">
                    <img src="images/sponsor/astoria.png" alt="Astoria Wines">
                </a>
                <a href="#">
                    <img src="images/sponsor/biancoeceleste.jpg" alt="Bianco e Celeste">
                </a>
                <a href="#">
                    <img src="images/sponsor/bibanesi.png" alt="Bibanesi">
                </a>
                <a href="#">
                    <img src="images/sponsor/commauto.png" alt="Commauto">
                </a>
                <a href="#">
                    <img src="images/sponsor/dapino.png" alt="Da Pino Pizzeria">
                </a>
                <a href="#">
                    <img src="images/sponsor/falcon.jpg" alt="Falcon">
                </a>
                <a href="#">
                    <img src="images/sponsor/lagunapalacehotel.png" alt="Laguna Palace Hotel">
                </a>
                <a href="#">
                    <img src="images/sponsor/lenzini.png" alt="Lenzini">
                </a>
                <a href="#">
                    <img src="images/sponsor/logo-radime.png" alt="Ra.Di.Me.">
                </a>
                <a href="#">
                    <img src="images/sponsor/pizzeriasantalucia.jpg" alt="Pizzeria Santa Lucia">
                </a>
            </div>
        </div>
    </aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

@endsection
