<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Modal</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Modal</h1>
                <div class="sa-article__subtitle">Use Bootstrap&#x27;s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-live-demo">Live Demo</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-static-backdrop">Static Backdrop</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-scrolling-long-content">Scrolling Long Content</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-vertically-centered">Vertically Centered</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-optional-sizes">Optional Sizes</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;&lt;p&gt;Modal body text goes here.&lt;/p&gt;&lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-live-demo" class="sa-anchor"><span class="sa-anchor__body">Live Demo<a class="sa-anchor__link" href="#article-live-demo">#</a></span></h2>
                <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">Woohoo, you&#x27;re reading this text in a modal!</div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-primary&quot;
    data-bs-toggle=&quot;modal&quot;
    data-bs-target=&quot;#exampleModal&quot;
&gt;
    Launch demo modal
&lt;/button&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModal&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                Woohoo, you&amp;#x27;re reading this text in a modal!
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
                <h2 id="article-static-backdrop" class="sa-anchor"><span class="sa-anchor__body">Static Backdrop<a class="sa-anchor__link" href="#article-static-backdrop">#</a></span></h2>
                <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Launch static backdrop modal</button>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">I will not close if you click outside me. Don&#x27;t even try to press escape key.</div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Understood</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    <div class="sa-example__code collapse" id="example-3">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-primary&quot;
    data-bs-toggle=&quot;modal&quot;
    data-bs-target=&quot;#staticBackdrop&quot;
&gt;
    Launch static backdrop modal
&lt;/button&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;staticBackdrop&quot;
    data-bs-backdrop=&quot;static&quot;
    data-bs-keyboard=&quot;false&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;staticBackdropLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                I will not close if you click outside me. Don&amp;#x27;t even try to press
                escape key.
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Understood&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-3" aria-expanded="false" aria-controls="example-3">Source Code</button>
                    </div>
                </div>
                <h2 id="article-scrolling-long-content" class="sa-anchor"><span class="sa-anchor__body">Scrolling Long Content<a class="sa-anchor__link" href="#article-scrolling-long-content">#</a></span></h2>
                <p>When modals become too long for the user&#x27;s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Launch demo modal</button>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>What follows is just some placeholder text for this modal dialog. You just gotta ignite the light and let it shine! Come just as you are to me. Just own the night like the 4th of July. Infect me with your love and fill me with your poison. Come just as you are to me. End of the rainbow looking treasure.</p>
                                        <p>I can&#x27;t sleep let&#x27;s run away and don&#x27;t ever look back, don&#x27;t ever look back. I can&#x27;t sleep let&#x27;s run away and don&#x27;t ever look back, don&#x27;t ever look back. Yes, we make angels cry, raining down on earth from up above. I&#x27;m walking on air (tonight). Let you put your hands on me in my skin-tight jeans. Stinging like a bee I earned my stripes. I went from zero, to my own hero. Even brighter than the moon, moon, moon. Make &#x27;em go, &#x27;Aah, aah, aah&#x27; as you shoot across the sky-y-y! Why don&#x27;t you let me stop by?</p>
                                        <p>Boom, boom, boom. Never made me blink one time. Yeah, you&#x27;re lucky if you&#x27;re on her plane. Talk about our future like we had a clue. Oh my God no exaggeration. You&#x27;re original, cannot be replaced. The girl&#x27;s a freak, she drive a jeep in Laguna Beach. It&#x27;s no big deal, it&#x27;s no big deal, it&#x27;s no big deal. In another life I would make you stay. I&#x27;m ma get your heart racing in my skin-tight jeans. I wanna walk on your wave length and be there when you vibrate Never made me blink one time.</p>
                                        <p>We&#x27;d keep all our promises be us against the world. In another life I would be your girl. We can dance, until we die, you and I, will be young forever. And on my 18th Birthday we got matching tattoos. So open up your heart and just let it begin. &#x27;Cause she&#x27;s the muse and the artist. She eats your heart out. Like Jeffrey Dahmer (woo). Pop your confetti. (This is how we do) I know one spark will shock the world, yeah yeah. If you only knew what the future holds.</p>
                                        <p>Sipping on Rosé, Silver Lake sun, coming up all lazy. It&#x27;s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I&#x27;ll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It&#x27;s time to bring out the big balloons. You could&#x27;ve been the greatest. Passport stamps, she&#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                        <p>We&#x27;re living the life. We&#x27;re doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl&#x27;s a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                                        <p>Before you met me I was alright but things were kinda heavy. Peach-pink lips, yeah, everybody stares. This is no big deal. Calling out my name. I could have rewrite your addiction. She&#x27;s got that, je ne sais quoi, you know it. Heavy is the head that wears the crown. &#x27;Cause, baby, you&#x27;re a firework. Like thunder gonna shake the ground.</p>
                                        <p>Just own the night like the 4th of July! I&#x27;m gon&#x27; put her in a coma. What you&#x27;re waiting for, it&#x27;s time for you to show it off. Can&#x27;t replace you with a million rings. You open my eyes and I&#x27;m ready to go, lead me into the light. And here you are. I&#x27;m gon&#x27; put her in a coma. Come on, let your colours burst. So cover your eyes, I have a surprise. As I march alone to a different beat. Glitter all over the room pink flamingos in the pool.</p>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    <div class="sa-example__code collapse" id="example-4">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-primary&quot;
    data-bs-toggle=&quot;modal&quot;
    data-bs-target=&quot;#exampleModalLong&quot;
&gt;
    Launch demo modal
&lt;/button&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalLong&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalLongTitle&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLongTitle&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;
                    What follows is just some placeholder text for this modal dialog. You
                    just gotta ignite the light and let it shine! Come just as you are to
                    me. Just own the night like the 4th of July. Infect me with your love
                    and fill me with your poison. Come just as you are to me. End of the
                    rainbow looking treasure.
                &lt;/p&gt;
                &lt;p&gt;
                    I can&amp;#x27;t sleep let&amp;#x27;s run away and don&amp;#x27;t ever look back,
                    don&amp;#x27;t ever look back. I can&amp;#x27;t sleep let&amp;#x27;s run away and
                    don&amp;#x27;t ever look back, don&amp;#x27;t ever look back. Yes, we make
                    angels cry, raining down on earth from up above. I&amp;#x27;m walking on
                    air (tonight). Let you put your hands on me in my skin-tight jeans.
                    Stinging like a bee I earned my stripes. I went from zero, to my own
                    hero. Even brighter than the moon, moon, moon. Make &amp;#x27;em go,
                    &amp;#x27;Aah, aah, aah&amp;#x27; as you shoot across the sky-y-y! Why
                    don&amp;#x27;t you let me stop by?
                &lt;/p&gt;
                &lt;p&gt;
                    Boom, boom, boom. Never made me blink one time. Yeah, you&amp;#x27;re
                    lucky if you&amp;#x27;re on her plane. Talk about our future like we had a
                    clue. Oh my God no exaggeration. You&amp;#x27;re original, cannot be
                    replaced. The girl&amp;#x27;s a freak, she drive a jeep in Laguna Beach.
                    It&amp;#x27;s no big deal, it&amp;#x27;s no big deal, it&amp;#x27;s no big deal.
                    In another life I would make you stay. I&amp;#x27;m ma get your heart
                    racing in my skin-tight jeans. I wanna walk on your wave length and be
                    there when you vibrate Never made me blink one time.
                &lt;/p&gt;
                &lt;p&gt;
                    We&amp;#x27;d keep all our promises be us against the world. In another
                    life I would be your girl. We can dance, until we die, you and I, will
                    be young forever. And on my 18th Birthday we got matching tattoos. So
                    open up your heart and just let it begin. &amp;#x27;Cause she&amp;#x27;s the
                    muse and the artist. She eats your heart out. Like Jeffrey Dahmer
                    (woo). Pop your confetti. (This is how we do) I know one spark will
                    shock the world, yeah yeah. If you only knew what the future holds.
                &lt;/p&gt;
                &lt;p&gt;
                    Sipping on Rosé, Silver Lake sun, coming up all lazy. It&amp;#x27;s in the
                    palm of your hand now baby. So we hit the boulevard. So make a wish,
                    I&amp;#x27;ll make it like your birthday everyday. Do you ever feel
                    already buried deep six feet under? It&amp;#x27;s time to bring out the
                    big balloons. You could&amp;#x27;ve been the greatest. Passport stamps,
                    she&amp;#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.
                &lt;/p&gt;
                &lt;p&gt;
                    We&amp;#x27;re living the life. We&amp;#x27;re doing it right. Open up your
                    heart. I was tryna hit it and quit it. Her love is like a drug. Always
                    leaves a trail of stardust. The girl&amp;#x27;s a freak, she drive a jeep
                    in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls
                    vintage Chanel baby.
                &lt;/p&gt;
                &lt;p&gt;
                    Before you met me I was alright but things were kinda heavy.
                    Peach-pink lips, yeah, everybody stares. This is no big deal. Calling
                    out my name. I could have rewrite your addiction. She&amp;#x27;s got that,
                    je ne sais quoi, you know it. Heavy is the head that wears the crown.
                    &amp;#x27;Cause, baby, you&amp;#x27;re a firework. Like thunder gonna shake
                    the ground.
                &lt;/p&gt;
                &lt;p&gt;
                    Just own the night like the 4th of July! I&amp;#x27;m gon&amp;#x27; put her in
                    a coma. What you&amp;#x27;re waiting for, it&amp;#x27;s time for you to show
                    it off. Can&amp;#x27;t replace you with a million rings. You open my eyes
                    and I&amp;#x27;m ready to go, lead me into the light. And here you are.
                    I&amp;#x27;m gon&amp;#x27; put her in a coma. Come on, let your colours burst.
                    So cover your eyes, I have a surprise. As I march alone to a different
                    beat. Glitter all over the room pink flamingos in the pool.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-4" aria-expanded="false" aria-controls="example-4">Source Code</button>
                    </div>
                </div>
                <p>You can also create a scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Launch demo modal</button>
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>What follows is just some placeholder text for this modal dialog. You just gotta ignite the light and let it shine! Come just as you are to me. Just own the night like the 4th of July. Infect me with your love and fill me with your poison. Come just as you are to me. End of the rainbow looking treasure.</p>
                                        <p>I can&#x27;t sleep let&#x27;s run away and don&#x27;t ever look back, don&#x27;t ever look back. I can&#x27;t sleep let&#x27;s run away and don&#x27;t ever look back, don&#x27;t ever look back. Yes, we make angels cry, raining down on earth from up above. I&#x27;m walking on air (tonight). Let you put your hands on me in my skin-tight jeans. Stinging like a bee I earned my stripes. I went from zero, to my own hero. Even brighter than the moon, moon, moon. Make &#x27;em go, &#x27;Aah, aah, aah&#x27; as you shoot across the sky-y-y! Why don&#x27;t you let me stop by?</p>
                                        <p>Boom, boom, boom. Never made me blink one time. Yeah, you&#x27;re lucky if you&#x27;re on her plane. Talk about our future like we had a clue. Oh my God no exaggeration. You&#x27;re original, cannot be replaced. The girl&#x27;s a freak, she drive a jeep in Laguna Beach. It&#x27;s no big deal, it&#x27;s no big deal, it&#x27;s no big deal. In another life I would make you stay. I&#x27;m ma get your heart racing in my skin-tight jeans. I wanna walk on your wave length and be there when you vibrate Never made me blink one time.</p>
                                        <p>We&#x27;d keep all our promises be us against the world. In another life I would be your girl. We can dance, until we die, you and I, will be young forever. And on my 18th Birthday we got matching tattoos. So open up your heart and just let it begin. &#x27;Cause she&#x27;s the muse and the artist. She eats your heart out. Like Jeffrey Dahmer (woo). Pop your confetti. (This is how we do) I know one spark will shock the world, yeah yeah. If you only knew what the future holds.</p>
                                        <p>Sipping on Rosé, Silver Lake sun, coming up all lazy. It&#x27;s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I&#x27;ll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It&#x27;s time to bring out the big balloons. You could&#x27;ve been the greatest. Passport stamps, she&#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                        <p>We&#x27;re living the life. We&#x27;re doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl&#x27;s a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                                        <p>Before you met me I was alright but things were kinda heavy. Peach-pink lips, yeah, everybody stares. This is no big deal. Calling out my name. I could have rewrite your addiction. She&#x27;s got that, je ne sais quoi, you know it. Heavy is the head that wears the crown. &#x27;Cause, baby, you&#x27;re a firework. Like thunder gonna shake the ground.</p>
                                        <p>Just own the night like the 4th of July! I&#x27;m gon&#x27; put her in a coma. What you&#x27;re waiting for, it&#x27;s time for you to show it off. Can&#x27;t replace you with a million rings. You open my eyes and I&#x27;m ready to go, lead me into the light. And here you are. I&#x27;m gon&#x27; put her in a coma. Come on, let your colours burst. So cover your eyes, I have a surprise. As I march alone to a different beat. Glitter all over the room pink flamingos in the pool.</p>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    <div class="sa-example__code collapse" id="example-5">
                        <pre><code class="language-html">&lt;button
    type=&quot;button&quot;
    class=&quot;btn btn-primary&quot;
    data-bs-toggle=&quot;modal&quot;
    data-bs-target=&quot;#exampleModalScrollable&quot;
&gt;
    Launch demo modal
&lt;/button&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalScrollable&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalScrollableTitle&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalScrollableTitle&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;
                    What follows is just some placeholder text for this modal dialog. You
                    just gotta ignite the light and let it shine! Come just as you are to
                    me. Just own the night like the 4th of July. Infect me with your love
                    and fill me with your poison. Come just as you are to me. End of the
                    rainbow looking treasure.
                &lt;/p&gt;
                &lt;p&gt;
                    I can&amp;#x27;t sleep let&amp;#x27;s run away and don&amp;#x27;t ever look back,
                    don&amp;#x27;t ever look back. I can&amp;#x27;t sleep let&amp;#x27;s run away and
                    don&amp;#x27;t ever look back, don&amp;#x27;t ever look back. Yes, we make
                    angels cry, raining down on earth from up above. I&amp;#x27;m walking on
                    air (tonight). Let you put your hands on me in my skin-tight jeans.
                    Stinging like a bee I earned my stripes. I went from zero, to my own
                    hero. Even brighter than the moon, moon, moon. Make &amp;#x27;em go,
                    &amp;#x27;Aah, aah, aah&amp;#x27; as you shoot across the sky-y-y! Why
                    don&amp;#x27;t you let me stop by?
                &lt;/p&gt;
                &lt;p&gt;
                    Boom, boom, boom. Never made me blink one time. Yeah, you&amp;#x27;re
                    lucky if you&amp;#x27;re on her plane. Talk about our future like we had a
                    clue. Oh my God no exaggeration. You&amp;#x27;re original, cannot be
                    replaced. The girl&amp;#x27;s a freak, she drive a jeep in Laguna Beach.
                    It&amp;#x27;s no big deal, it&amp;#x27;s no big deal, it&amp;#x27;s no big deal.
                    In another life I would make you stay. I&amp;#x27;m ma get your heart
                    racing in my skin-tight jeans. I wanna walk on your wave length and be
                    there when you vibrate Never made me blink one time.
                &lt;/p&gt;
                &lt;p&gt;
                    We&amp;#x27;d keep all our promises be us against the world. In another
                    life I would be your girl. We can dance, until we die, you and I, will
                    be young forever. And on my 18th Birthday we got matching tattoos. So
                    open up your heart and just let it begin. &amp;#x27;Cause she&amp;#x27;s the
                    muse and the artist. She eats your heart out. Like Jeffrey Dahmer
                    (woo). Pop your confetti. (This is how we do) I know one spark will
                    shock the world, yeah yeah. If you only knew what the future holds.
                &lt;/p&gt;
                &lt;p&gt;
                    Sipping on Rosé, Silver Lake sun, coming up all lazy. It&amp;#x27;s in the
                    palm of your hand now baby. So we hit the boulevard. So make a wish,
                    I&amp;#x27;ll make it like your birthday everyday. Do you ever feel
                    already buried deep six feet under? It&amp;#x27;s time to bring out the
                    big balloons. You could&amp;#x27;ve been the greatest. Passport stamps,
                    she&amp;#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.
                &lt;/p&gt;
                &lt;p&gt;
                    We&amp;#x27;re living the life. We&amp;#x27;re doing it right. Open up your
                    heart. I was tryna hit it and quit it. Her love is like a drug. Always
                    leaves a trail of stardust. The girl&amp;#x27;s a freak, she drive a jeep
                    in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls
                    vintage Chanel baby.
                &lt;/p&gt;
                &lt;p&gt;
                    Before you met me I was alright but things were kinda heavy.
                    Peach-pink lips, yeah, everybody stares. This is no big deal. Calling
                    out my name. I could have rewrite your addiction. She&amp;#x27;s got that,
                    je ne sais quoi, you know it. Heavy is the head that wears the crown.
                    &amp;#x27;Cause, baby, you&amp;#x27;re a firework. Like thunder gonna shake
                    the ground.
                &lt;/p&gt;
                &lt;p&gt;
                    Just own the night like the 4th of July! I&amp;#x27;m gon&amp;#x27; put her in
                    a coma. What you&amp;#x27;re waiting for, it&amp;#x27;s time for you to show
                    it off. Can&amp;#x27;t replace you with a million rings. You open my eyes
                    and I&amp;#x27;m ready to go, lead me into the light. And here you are.
                    I&amp;#x27;m gon&amp;#x27; put her in a coma. Come on, let your colours burst.
                    So cover your eyes, I have a surprise. As I march alone to a different
                    beat. Glitter all over the room pink flamingos in the pool.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-5" aria-expanded="false" aria-controls="example-5">Source Code</button>
                    </div>
                </div>
                <h2 id="article-vertically-centered" class="sa-anchor"><span class="sa-anchor__body">Vertically Centered<a class="sa-anchor__link" href="#article-vertically-centered">#</a></span></h2>
                <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered modal</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Vertically centered scrollable modal</button></div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
                                        <p>In this case, the dialog has a bit more content, just to show how vertical centering can be added to a scrollable modal.</p>
                                        <p>What follows is just some placeholder text for this modal dialog. Sipping on Rosé, Silver Lake sun, coming up all lazy. It&#x27;s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I&#x27;ll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It&#x27;s time to bring out the big balloons. You could&#x27;ve been the greatest. Passport stamps, she&#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                        <p>We&#x27;re living the life. We&#x27;re doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl&#x27;s a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    <div class="sa-example__code collapse" id="example-6">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalCenter&quot;
        &gt;
            Vertically centered modal
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalCenteredScrollable&quot;
        &gt;
            Vertically centered scrollable modal
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalCenter&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalCenterTitle&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenterTitle&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;
                    Placeholder text for this demonstration of a vertically centered modal
                    dialog.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalCenteredScrollable&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalCenteredScrollableTitle&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered modal-dialog-scrollable&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenteredScrollableTitle&quot;&gt;
                    Modal title
                &lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;
                    Placeholder text for this demonstration of a vertically centered modal
                    dialog.
                &lt;/p&gt;
                &lt;p&gt;
                    In this case, the dialog has a bit more content, just to show how
                    vertical centering can be added to a scrollable modal.
                &lt;/p&gt;
                &lt;p&gt;
                    What follows is just some placeholder text for this modal dialog.
                    Sipping on Rosé, Silver Lake sun, coming up all lazy. It&amp;#x27;s in the
                    palm of your hand now baby. So we hit the boulevard. So make a wish,
                    I&amp;#x27;ll make it like your birthday everyday. Do you ever feel
                    already buried deep six feet under? It&amp;#x27;s time to bring out the
                    big balloons. You could&amp;#x27;ve been the greatest. Passport stamps,
                    she&amp;#x27;s cosmopolitan. Your kiss is cosmic, every move is magic.
                &lt;/p&gt;
                &lt;p&gt;
                    We&amp;#x27;re living the life. We&amp;#x27;re doing it right. Open up your
                    heart. I was tryna hit it and quit it. Her love is like a drug. Always
                    leaves a trail of stardust. The girl&amp;#x27;s a freak, she drive a jeep
                    in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls
                    vintage Chanel baby.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;
                    Close&lt;/button
                &gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-6" aria-expanded="false" aria-controls="example-6">Source Code</button>
                    </div>
                </div>
                <h2 id="article-optional-sizes" class="sa-anchor"><span class="sa-anchor__body">Optional Sizes<a class="sa-anchor__link" href="#article-optional-sizes">#</a></span></h2>
                <p>Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Class</th>
                            <th>Modal max-width</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Small</td>
                            <td><code>.modal-sm</code></td>
                            <td><code>300px</code></td>
                        </tr>
                        <tr>
                            <td>Default</td>
                            <td class="text-muted">None</td>
                            <td><code>500px</code></td>
                        </tr>
                        <tr>
                            <td>Large</td>
                            <td><code>.modal-lg</code></td>
                            <td><code>800px</code></td>
                        </tr>
                        <tr>
                            <td>Extra large</td>
                            <td><code>.modal-xl</code></td>
                            <td><code>1140px</code></td>
                        </tr>
                    </tbody>
                </table>
                <p>Our default modal without modifier class constitutes the &quot;medium&quot; size modal.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="row g-3">
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra large modal</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalNl">Normal modal</button></div>
                            <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small modal</button></div>
                        </div>
                        <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalXlLabel">Extra large modal</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">...</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLgLabel">Large modal</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">...</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalNl" tabindex="-1" aria-labelledby="exampleModalNlLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalNlLabel">Normal modal</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">...</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalSmLabel">Small modal</h5><button type="button" class="sa-close sa-close--modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">...</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    <div class="sa-example__code collapse" id="example-7">
                        <pre><code class="language-html">&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalXl&quot;
        &gt;
            Extra large modal
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalLg&quot;
        &gt;
            Large modal
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalNl&quot;
        &gt;
            Normal modal
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-auto&quot;&gt;
        &lt;button
            type=&quot;button&quot;
            class=&quot;btn btn-primary&quot;
            data-bs-toggle=&quot;modal&quot;
            data-bs-target=&quot;#exampleModalSm&quot;
        &gt;
            Small modal
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalXl&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalXlLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-xl&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalXlLabel&quot;&gt;Extra large modal&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalLg&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalLgLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLgLabel&quot;&gt;Large modal&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalNl&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalNlLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalNlLabel&quot;&gt;Normal modal&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div
    class=&quot;modal fade&quot;
    id=&quot;exampleModalSm&quot;
    tabindex=&quot;-1&quot;
    aria-labelledby=&quot;exampleModalSmLabel&quot;
    aria-hidden=&quot;true&quot;
&gt;
    &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalSmLabel&quot;&gt;Small modal&lt;/h5&gt;
                &lt;button
                    type=&quot;button&quot;
                    class=&quot;sa-close sa-close--modal&quot;
                    data-bs-dismiss=&quot;modal&quot;
                    aria-label=&quot;Close&quot;
                &gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-7" aria-expanded="false" aria-controls="example-7">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->