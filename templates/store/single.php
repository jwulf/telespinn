<div id="container">
  <div class="container">
    <div id="page">
      <nav id="breadcrumbs">
        Du er her: <a href="/">Hjem</a> » <a href="/butikk">Butikk</a> » <a href="<?= \Telespinn\URL::toSelf(); ?>"><?= $data['pageTitle']; ?></a>
      </nav>
      <div id="product">
        <div class="grid-row">
          <div class="grid-column grid-span-5">
            <a href="/inspirasjon/1">
              <img src="/assets/images/produkt-garn-1.jpg">
            </a>
          </div>
          <div class="grid-column grid-span-7">
            <h1>Marigarn M030</h1>
            <p>
              Mari M030 er et spesielt mykt 2-tråds garn.
            </p>
            <p>
              Mari er svært behagelig mot huden. Garnet er spunnet av mohair fra de to første klippene av geitekillingen, såkalt kidmohair.
            </p>
            <p>
              <h1>kr 115</h1>
            </p>
            <p>
              <a class="button-dark button-green">Legg til i handlekurven</a>
            </p>
          </div>
        </div>
        <div class="grid-row product-row" id="product-inspiration">
          <div class="grid-column grid-span-12">
            <h2>Inspirasjon</h2>
            <div class="grid-row">
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
            </div>
            <div class="grid-row">
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
              <div class="grid-column grid-span-3">
                <a href="/inspirasjon/1">
                  <img src="/assets/images/single.jpg">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-row product-row" id="product-comments">
          <div class="grid-column grid-span-12">
            <div id="disqus">
              <div id="disqus_thread"></div>
              <script type="text/javascript">
              /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
              var disqus_shortname = 'telespinn-2008'; // required: replace example with your forum shortname

              /* * * DON'T EDIT BELOW THIS LINE * * */
              (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
              })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>