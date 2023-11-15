<!-- sa-app__body -->
<div id="top" class="sa-app__body">
  <div class="sa-article sa-article--has-toc">
    <div class="sa-article__container container container--max--md">
      <div class="sa-article__header">
        <nav class="sa-article__breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-sa-simple">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Forms</li>
            <li class="breadcrumb-item active" aria-current="page">File</li>
          </ol>
        </nav>
        <h1 class="sa-article__title">File</h1>
        <div class="sa-article__subtitle">
          Consistent cross-browser and cross-device file input. Documentation
          and description for the corresponding control.
        </div>
      </div>
      <div class="sa-toc sa-article__toc">
        <div class="sa-toc__container">
          <div class="sa-toc__head">
            <a class="sa-toc__link" href="#top">Table of Content</a>
          </div>
          <ul class="sa-toc__list">
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-basic-example"
                >Basic Example</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-sizing">Sizing</a>
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-states">States</a>
              <ul class="sa-toc__list"></ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="sa-article__content">
        <h2 id="article-basic-example" class="sa-anchor">
          <span class="sa-anchor__body"
            >Basic Example<a
              class="sa-anchor__link"
              href="#article-basic-example"
              >#</a
            ></span
          >
        </h2>
        <p>
          The file input is the most gnarly of the bunch and requires additional
          JavaScript if you&#x27;d like to hook them up with functional
          <em>Choose file…</em> and selected file name text.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <label for="formFile-1" class="form-label"
              >Default file input example</label
            ><input type="file" class="form-control" id="formFile-1" />
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-1"
            aria-expanded="false"
            aria-controls="example-1"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-1">
            <pre><code class="language-html">&lt;label for=&quot;formFile-1&quot; class=&quot;form-label&quot;&gt;Default file input example&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;formFile-1&quot; /&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-1"
              aria-expanded="false"
              aria-controls="example-1"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-sizing" class="sa-anchor">
          <span class="sa-anchor__body"
            >Sizing<a class="sa-anchor__link" href="#article-sizing">#</a></span
          >
        </h2>
        <p>
          The file input is the most gnarly of the bunch and requires additional
          JavaScript if you&#x27;d like to hook them up with functional
          <em>Choose file…</em> and selected file name text.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="mb-4">
              <label for="formFile-2-sm" class="form-label"
                >Small file input example</label
              ><input
                type="file"
                class="form-control form-control-sm"
                id="formFile-2-sm"
              />
            </div>
            <div class="mb-4">
              <label for="formFile-2-nl" class="form-label"
                >Normal file input example</label
              ><input type="file" class="form-control" id="formFile-2-nl" />
            </div>
            <div>
              <label for="formFile-2-lg" class="form-label"
                >Large file input example</label
              ><input
                type="file"
                class="form-control form-control-lg"
                id="formFile-2-lg"
              />
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-2"
            aria-expanded="false"
            aria-controls="example-2"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-2">
            <pre><code class="language-html">&lt;div class=&quot;mb-4&quot;&gt;
&lt;label for=&quot;formFile-2-sm&quot; class=&quot;form-label&quot;&gt;Small file input example&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control form-control-sm&quot; id=&quot;formFile-2-sm&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-4&quot;&gt;
&lt;label for=&quot;formFile-2-nl&quot; class=&quot;form-label&quot;&gt;Normal file input example&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;formFile-2-nl&quot; /&gt;
&lt;/div&gt;
&lt;div&gt;
&lt;label for=&quot;formFile-2-lg&quot; class=&quot;form-label&quot;&gt;Large file input example&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control form-control-lg&quot; id=&quot;formFile-2-lg&quot; /&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-2"
              aria-expanded="false"
              aria-controls="example-2"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-states" class="sa-anchor">
          <span class="sa-anchor__body"
            >States<a class="sa-anchor__link" href="#article-states">#</a></span
          >
        </h2>
        <p>
          A file can be in several different states. Below you can see a demo of
          these states:
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="mb-4">
              <label for="formFile-3-normal" class="form-label">Normal</label
              ><input type="file" class="form-control" id="formFile-3-normal" />
            </div>
            <div class="mb-4">
              <label for="formFile-3-disabled" class="form-label"
                >Disabled</label
              ><input
                type="file"
                class="form-control"
                id="formFile-3-disabled"
                disabled=""
              />
            </div>
            <div class="mb-4">
              <label for="formFile-3-valid" class="form-label">Valid</label
              ><input
                type="file"
                class="form-control is-valid"
                id="formFile-3-valid"
              />
            </div>
            <div>
              <label for="formFile-3-invalid" class="form-label">Invalid</label
              ><input
                type="file"
                class="form-control is-invalid"
                id="formFile-3-invalid"
              />
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-3"
            aria-expanded="false"
            aria-controls="example-3"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-3">
            <pre><code class="language-html">&lt;div class=&quot;mb-4&quot;&gt;
&lt;label for=&quot;formFile-3-normal&quot; class=&quot;form-label&quot;&gt;Normal&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;formFile-3-normal&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-4&quot;&gt;
&lt;label for=&quot;formFile-3-disabled&quot; class=&quot;form-label&quot;&gt;Disabled&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;formFile-3-disabled&quot; disabled=&quot;&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-4&quot;&gt;
&lt;label for=&quot;formFile-3-valid&quot; class=&quot;form-label&quot;&gt;Valid&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control is-valid&quot; id=&quot;formFile-3-valid&quot; /&gt;
&lt;/div&gt;
&lt;div&gt;
&lt;label for=&quot;formFile-3-invalid&quot; class=&quot;form-label&quot;&gt;Invalid&lt;/label
&gt;&lt;input type=&quot;file&quot; class=&quot;form-control is-invalid&quot; id=&quot;formFile-3-invalid&quot; /&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-3"
              aria-expanded="false"
              aria-controls="example-3"
            >
              Source Code
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sa-app__body / end -->
