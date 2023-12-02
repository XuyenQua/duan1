<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="sa-article sa-article--has-toc">
        <div class="sa-article__container container container--max--md">
            <div class="sa-article__header">
                <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Accordion</li>
                    </ol>
                </nav>
                <h1 class="sa-article__title">Accordion</h1>
                <div class="sa-article__subtitle">Accordion is useful when you need to switch between hiding and showing a lot of content.</div>
            </div>
            <div class="sa-toc sa-article__toc">
                <div class="sa-toc__container">
                    <div class="sa-toc__head"><a class="sa-toc__link" href="#top">Table of Content</a></div>
                    <ul class="sa-toc__list">
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-basic-example">Basic Example</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                        <li class="sa-toc__item"><a class="sa-toc__link" href="#article-insular-layout">Insular Layout</a>
                            <ul class="sa-toc__list"></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sa-article__content">
                <h2 id="article-basic-example" class="sa-anchor"><span class="sa-anchor__body">Basic Example<a class="sa-anchor__link" href="#article-basic-example">#</a></span></h2>
                <p>Basic layout when all accordion parts are inside one card.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="accordion card" id="accordion-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion-1-item-0-header"><button class="accordion-button sa-hover-area" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1-item-0" aria-expanded="true" aria-controls="accordion-1-item-0"><span class="accordion-sa-icon"></span>Accordion Item #1</button></h2>
                                <div id="accordion-1-item-0" class="accordion-collapse collapse show" data-bs-parent="#accordion-1" aria-labelledby="accordion-1-item-0-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                            <div class="sa-divider"></div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion-1-item-1-header"><button class="accordion-button sa-hover-area collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1-item-1" aria-expanded="false" aria-controls="accordion-1-item-1"><span class="accordion-sa-icon"></span>Accordion Item #2</button></h2>
                                <div id="accordion-1-item-1" class="accordion-collapse collapse" data-bs-parent="#accordion-1" aria-labelledby="accordion-1-item-1-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                            <div class="sa-divider"></div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion-1-item-2-header"><button class="accordion-button sa-hover-area collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1-item-2" aria-expanded="false" aria-controls="accordion-1-item-2"><span class="accordion-sa-icon"></span>Accordion Item #3</button></h2>
                                <div id="accordion-1-item-2" class="accordion-collapse collapse" data-bs-parent="#accordion-1" aria-labelledby="accordion-1-item-2-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    <div class="sa-example__code collapse" id="example-1">
                        <pre><code class="language-html">&lt;div class=&quot;accordion card&quot; id=&quot;accordion-1&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-1-item-0-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-1-item-0&quot;
                aria-expanded=&quot;true&quot;
                aria-controls=&quot;accordion-1-item-0&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-1-item-0&quot;
            class=&quot;accordion-collapse collapse show&quot;
            data-bs-parent=&quot;#accordion-1&quot;
            aria-labelledby=&quot;accordion-1-item-0-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sa-divider&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-1-item-1-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area collapsed&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-1-item-1&quot;
                aria-expanded=&quot;false&quot;
                aria-controls=&quot;accordion-1-item-1&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-1-item-1&quot;
            class=&quot;accordion-collapse collapse&quot;
            data-bs-parent=&quot;#accordion-1&quot;
            aria-labelledby=&quot;accordion-1-item-1-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sa-divider&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-1-item-2-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area collapsed&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-1-item-2&quot;
                aria-expanded=&quot;false&quot;
                aria-controls=&quot;accordion-1-item-2&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-1-item-2&quot;
            class=&quot;accordion-collapse collapse&quot;
            data-bs-parent=&quot;#accordion-1&quot;
            aria-labelledby=&quot;accordion-1-item-2-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-1" aria-expanded="false" aria-controls="example-1">Source Code</button>
                    </div>
                </div>
                <h2 id="article-insular-layout" class="sa-anchor"><span class="sa-anchor__body">Insular Layout<a class="sa-anchor__link" href="#article-insular-layout">#</a></span></h2>
                <p>Add <code>.card</code> to each <code>.accordion-item</code> and remove all <code>.sa-divider</code> to get an &quot;Insular&quot; layout.</p>
                <div class="sa-example my-5">
                    <div class="sa-example__legend">Example</div>
                    <div class="sa-example__body">
                        <div class="accordion" id="accordion-2">
                            <div class="accordion-item card">
                                <h2 class="accordion-header" id="accordion-2-item-0-header"><button class="accordion-button sa-hover-area" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2-item-0" aria-expanded="true" aria-controls="accordion-2-item-0"><span class="accordion-sa-icon"></span>Accordion Item #1</button></h2>
                                <div id="accordion-2-item-0" class="accordion-collapse collapse show" data-bs-parent="#accordion-2" aria-labelledby="accordion-2-item-0-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                            <div class="accordion-item card mt-4">
                                <h2 class="accordion-header" id="accordion-2-item-1-header"><button class="accordion-button sa-hover-area collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2-item-1" aria-expanded="false" aria-controls="accordion-2-item-1"><span class="accordion-sa-icon"></span>Accordion Item #2</button></h2>
                                <div id="accordion-2-item-1" class="accordion-collapse collapse" data-bs-parent="#accordion-2" aria-labelledby="accordion-2-item-1-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                            <div class="accordion-item card mt-4">
                                <h2 class="accordion-header" id="accordion-2-item-2-header"><button class="accordion-button sa-hover-area collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2-item-2" aria-expanded="false" aria-controls="accordion-2-item-2"><span class="accordion-sa-icon"></span>Accordion Item #3</button></h2>
                                <div id="accordion-2-item-2" class="accordion-collapse collapse" data-bs-parent="#accordion-2" aria-labelledby="accordion-2-item-2-header">
                                    <div class="accordion-body">Historically, philosophy encompassed all bodies of knowledge and a practitioner was known as a philosopher. From the time of Ancient Greek philosopher Aristotle to the 19th century, &quot;natural philosophy&quot; encompassed astronomy, medicine, and physics. For example, Newton&#x27;s 1687 Mathematical Principles of Natural Philosophy later became classified as a book of physics.</div>
                                </div>
                            </div>
                        </div>
                    </div><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    <div class="sa-example__code collapse" id="example-2">
                        <pre><code class="language-html">&lt;div class=&quot;accordion&quot; id=&quot;accordion-2&quot;&gt;
    &lt;div class=&quot;accordion-item card&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-2-item-0-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-2-item-0&quot;
                aria-expanded=&quot;true&quot;
                aria-controls=&quot;accordion-2-item-0&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-2-item-0&quot;
            class=&quot;accordion-collapse collapse show&quot;
            data-bs-parent=&quot;#accordion-2&quot;
            aria-labelledby=&quot;accordion-2-item-0-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item card mt-4&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-2-item-1-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area collapsed&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-2-item-1&quot;
                aria-expanded=&quot;false&quot;
                aria-controls=&quot;accordion-2-item-1&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-2-item-1&quot;
            class=&quot;accordion-collapse collapse&quot;
            data-bs-parent=&quot;#accordion-2&quot;
            aria-labelledby=&quot;accordion-2-item-1-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item card mt-4&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordion-2-item-2-header&quot;&gt;
            &lt;button
                class=&quot;accordion-button sa-hover-area collapsed&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#accordion-2-item-2&quot;
                aria-expanded=&quot;false&quot;
                aria-controls=&quot;accordion-2-item-2&quot;
            &gt;
                &lt;span class=&quot;accordion-sa-icon&quot;&gt;&lt;/span&gt;Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div
            id=&quot;accordion-2-item-2&quot;
            class=&quot;accordion-collapse collapse&quot;
            data-bs-parent=&quot;#accordion-2&quot;
            aria-labelledby=&quot;accordion-2-item-2-header&quot;
        &gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Historically, philosophy encompassed all bodies of knowledge and a
                practitioner was known as a philosopher. From the time of Ancient Greek
                philosopher Aristotle to the 19th century, &amp;quot;natural philosophy&amp;quot;
                encompassed astronomy, medicine, and physics. For example, Newton&amp;#x27;s
                1687 Mathematical Principles of Natural Philosophy later became classified
                as a book of physics.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre><button class="sa-example__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example-2" aria-expanded="false" aria-controls="example-2">Source Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->