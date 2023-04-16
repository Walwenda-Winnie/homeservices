<style>
    #top-header{
        height:70vh;
        
    }
    #top-header *{
        text-shadow: 3px 2px #000000b0;
    }
    #top-header .title{
        font-size:5em;
        text-shadow:4px 4px #000000f5;
    }
    #top-header:before{
        content:'';
        position:absolute;
        height:80vh;
        width: calc(100%);
        top:0;
        left:0;
        background-image:url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
        z-index: 0;
        filter:brightness(.95)
    }
    .service-name {
        font-size: 1.35rem;
        font-variant: all-petite-caps;
        font-family: monospace;
        font-weight: 600;
        color: #b5b5b5;
    }
    img.company-logo {
        transition: transform .02s ease-in;
    }
    img.company-logo:hover {
        transform: scale(1.02);
    }
</style>
<header id="top-header" class="d-flex justify-content-center align-items-end py-3 px-5">
    <div class="position-relative" style="z-index: 1;">
    <div class="mb-5 pb-5">
        <h1 class='text-center title'>Payment of Services</h1>
    </div>
    </div>
</header>
<section class="py-4">
    <div class="container">
        <?php echo  is_file('payment_of_services.html') ? file_get_contents('payment_of_services.html') : "Payment of services is empty" ?>
    </div>
</section>