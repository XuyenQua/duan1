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
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">
              Basic Tables
            </li>
          </ol>
        </nav>
        <h1 class="sa-article__title">Basic Tables</h1>
        <div class="sa-article__subtitle">
          Documentation and examples for opt-in styling of tables (given their
          prevalent use in JavaScript plugins) with Bootstrap.
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
              <a class="sa-toc__link" href="#article-variants">Variants</a>
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-striped-rows"
                >Striped Rows</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-hoverable-rows"
                >Hoverable Rows</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-bordered-tables"
                >Bordered Tables</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-tables-without-borders"
                >Tables Without Borders</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-small-tables"
                >Small Tables</a
              >
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-nesting">Nesting</a>
              <ul class="sa-toc__list"></ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-anatomy">Anatomy</a>
              <ul class="sa-toc__list">
                <li class="sa-toc__item">
                  <a class="sa-toc__link" href="#article-table-head"
                    >Table Head</a
                  >
                  <ul class="sa-toc__list"></ul>
                </li>
                <li class="sa-toc__item">
                  <a class="sa-toc__link" href="#article-table-foot"
                    >Table Foot</a
                  >
                  <ul class="sa-toc__list"></ul>
                </li>
                <li class="sa-toc__item">
                  <a class="sa-toc__link" href="#article-captions">Captions</a>
                  <ul class="sa-toc__list"></ul>
                </li>
              </ul>
            </li>
            <li class="sa-toc__item">
              <a class="sa-toc__link" href="#article-responsive-tables"
                >Responsive Tables</a
              >
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
          Using the most basic table markup, here&#x27;s how
          <code>.table</code>-based tables look in Bootstrap.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
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
        <h2 id="article-variants" class="sa-anchor">
          <span class="sa-anchor__body"
            >Variants<a class="sa-anchor__link" href="#article-variants"
              >#</a
            ></span
          >
        </h2>
        <p>
          Use contextual classes to color tables, table rows or individual
          cells.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-dark mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-dark mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
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
        <h2 id="article-striped-rows" class="sa-anchor">
          <span class="sa-anchor__body"
            >Striped Rows<a class="sa-anchor__link" href="#article-striped-rows"
              >#</a
            ></span
          >
        </h2>
        <p>
          Use <code>.table-striped</code> to add zebra-striping to any table row
          within the<code>&lt;tbody&gt;</code>.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-striped mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
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
        <h2 id="article-hoverable-rows" class="sa-anchor">
          <span class="sa-anchor__body"
            >Hoverable Rows<a
              class="sa-anchor__link"
              href="#article-hoverable-rows"
              >#</a
            ></span
          >
        </h2>
        <p>
          Add <code>.table-hover</code> to enable a hover state on table rows
          within a <code>&lt;tbody&gt;</code>.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-4"
            aria-expanded="false"
            aria-controls="example-4"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-4">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-hover mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-4"
              aria-expanded="false"
              aria-controls="example-4"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-bordered-tables" class="sa-anchor">
          <span class="sa-anchor__body"
            >Bordered Tables<a
              class="sa-anchor__link"
              href="#article-bordered-tables"
              >#</a
            ></span
          >
        </h2>
        <p>
          Add <code>.table-bordered</code> for borders on all sides of the table
          and cells.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-5"
            aria-expanded="false"
            aria-controls="example-5"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-5">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-bordered mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-5"
              aria-expanded="false"
              aria-controls="example-5"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-tables-without-borders" class="sa-anchor">
          <span class="sa-anchor__body"
            >Tables Without Borders<a
              class="sa-anchor__link"
              href="#article-tables-without-borders"
              >#</a
            ></span
          >
        </h2>
        <p>Add <code>.table-borderless</code> for a table without borders.</p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-borderless mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-6"
            aria-expanded="false"
            aria-controls="example-6"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-6">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-borderless mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-6"
              aria-expanded="false"
              aria-controls="example-6"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-small-tables" class="sa-anchor">
          <span class="sa-anchor__body"
            >Small Tables<a class="sa-anchor__link" href="#article-small-tables"
              >#</a
            ></span
          >
        </h2>
        <p>
          Add <code>.table-sm</code> to make any <code>.table</code> more
          compact by cutting all cell <code>padding</code> in half.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-sm mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-7"
            aria-expanded="false"
            aria-controls="example-7"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-7">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-sm mb-0&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-7"
              aria-expanded="false"
              aria-controls="example-7"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-nesting" class="sa-anchor">
          <span class="sa-anchor__body"
            >Nesting<a class="sa-anchor__link" href="#article-nesting"
              >#</a
            ></span
          >
        </h2>
        <p>
          Border styles, active styles, and table variants are not inherited by
          nested tables.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Header</th>
                              <th scope="col">Header</th>
                              <th scope="col">Header</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">A</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                            <tr>
                              <th scope="row">B</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                            <tr>
                              <th scope="row">C</th>
                              <td>First</td>
                              <td>Last</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-8"
            aria-expanded="false"
            aria-controls="example-8"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-8">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table table-striped table-bordered&quot;&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td colspan=&quot;4&quot;&gt;
            &lt;table class=&quot;table mb-0&quot;&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                        &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                        &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope=&quot;row&quot;&gt;A&lt;/th&gt;
                        &lt;td&gt;First&lt;/td&gt;
                        &lt;td&gt;Last&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope=&quot;row&quot;&gt;B&lt;/th&gt;
                        &lt;td&gt;First&lt;/td&gt;
                        &lt;td&gt;Last&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope=&quot;row&quot;&gt;C&lt;/th&gt;
                        &lt;td&gt;First&lt;/td&gt;
                        &lt;td&gt;Last&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Larry&lt;/td&gt;
        &lt;td&gt;the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-8"
              aria-expanded="false"
              aria-controls="example-8"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-anatomy" class="sa-anchor">
          <span class="sa-anchor__body"
            >Anatomy<a class="sa-anchor__link" href="#article-anatomy"
              >#</a
            ></span
          >
        </h2>
        <h3 id="article-table-head" class="sa-anchor">
          <span class="sa-anchor__body"
            >Table Head<a class="sa-anchor__link" href="#article-table-head"
              >#</a
            ></span
          >
        </h3>
        <p>
          Similar to tables and dark tables, use the modifier classes
          <code>.table-light</code> or<code>.table-dark</code> to make
          <code>&lt;thead&gt;</code>s appear light or dark gray.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-9"
            aria-expanded="false"
            aria-controls="example-9"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-9">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table mb-0&quot;&gt;
&lt;thead class=&quot;table-light&quot;&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-9"
              aria-expanded="false"
              aria-controls="example-9"
            >
              Source Code
            </button>
          </div>
        </div>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-10"
            aria-expanded="false"
            aria-controls="example-10"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-10">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table mb-0&quot;&gt;
&lt;thead class=&quot;table-dark&quot;&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-10"
              aria-expanded="false"
              aria-controls="example-10"
            >
              Source Code
            </button>
          </div>
        </div>
        <h3 id="article-table-foot" class="sa-anchor">
          <span class="sa-anchor__body"
            >Table Foot<a class="sa-anchor__link" href="#article-table-foot"
              >#</a
            ></span
          >
        </h3>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Footer</td>
                      <td>Footer</td>
                      <td>Footer</td>
                      <td>Footer</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-11"
            aria-expanded="false"
            aria-controls="example-11"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-11">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table mb-0&quot;&gt;
&lt;thead class=&quot;table-light&quot;&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Larry&lt;/td&gt;
        &lt;td&gt;the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;tfoot&gt;
    &lt;tr&gt;
        &lt;td&gt;Footer&lt;/td&gt;
        &lt;td&gt;Footer&lt;/td&gt;
        &lt;td&gt;Footer&lt;/td&gt;
        &lt;td&gt;Footer&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tfoot&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-11"
              aria-expanded="false"
              aria-controls="example-11"
            >
              Source Code
            </button>
          </div>
        </div>
        <h3 id="article-captions" class="sa-anchor">
          <span class="sa-anchor__body"
            >Captions<a class="sa-anchor__link" href="#article-captions"
              >#</a
            ></span
          >
        </h3>
        <p>
          A <code>&lt;caption&gt;</code> functions like a heading for a table.
          It helps users with screen readers to find a table and understand what
          it&#x27;s about and decide if they want to read it.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <caption class="pb-0">
                    List of users
                  </caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-12"
            aria-expanded="false"
            aria-controls="example-12"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-12">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table mb-0&quot;&gt;
&lt;caption class=&quot;pb-0&quot;&gt;
    List of users
&lt;/caption&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-12"
              aria-expanded="false"
              aria-controls="example-12"
            >
              Source Code
            </button>
          </div>
        </div>
        <p>
          You can also put the <code>&lt;caption&gt;</code> on the top of the
          table with<code>.caption-top</code>.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <table class="table caption-top mb-0">
                  <caption class="pt-0">
                    List of users
                  </caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-13"
            aria-expanded="false"
            aria-controls="example-13"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-13">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;table class=&quot;table caption-top mb-0&quot;&gt;
&lt;caption class=&quot;pt-0&quot;&gt;
    List of users
&lt;/caption&gt;
&lt;thead&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Larry&lt;/td&gt;
        &lt;td&gt;the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-13"
              aria-expanded="false"
              aria-controls="example-13"
            >
              Source Code
            </button>
          </div>
        </div>
        <h2 id="article-responsive-tables" class="sa-anchor">
          <span class="sa-anchor__body"
            >Responsive Tables<a
              class="sa-anchor__link"
              href="#article-responsive-tables"
              >#</a
            ></span
          >
        </h2>
        <p>
          Responsive tables allow tables to be scrolled horizontally with ease.
          Make any table responsive across all viewports by wrapping a
          <code>.table</code> with <code>.table-responsive</code>. Or, pick a
          maximum breakpoint with which to have a responsive table up to by
          using <code>.table-responsive-sm|-md|-lg|-xl|-xxl</code>.
        </p>
        <div class="sa-example my-5">
          <div class="sa-example__legend">Example</div>
          <div class="sa-example__body">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <button
            class="sa-example__button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#example-14"
            aria-expanded="false"
            aria-controls="example-14"
          >
            Source Code
          </button>
          <div class="sa-example__code collapse" id="example-14">
            <pre><code class="language-html">&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
            &lt;td&gt;Cell&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            <button
              class="sa-example__button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#example-14"
              aria-expanded="false"
              aria-controls="example-14"
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
