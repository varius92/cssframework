<!doctype html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <link rel="stylesheet" href="less/demo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header></header>
<main class="grid grid--container">


  <section id="typography" class="row">
    <div class="col">
      <header class="text--center"><h3>Typography</h3></header>
      <article>
        <header class="text--center"><h4>Headings</h4></header>
        <p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        </p>
      </article>
      <article>
        <header class="text--center"><h4>Paragraph</h4></header>
        <p class="lead text--justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquid deleniti deserunt dicta eius
          enim est, fugit harum illum in neque omnis perspiciatis quaerat quia reiciendis rerum saepe temporibus.
        </p>
        <p class="text--justify">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
          clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
          sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
          takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
        <div class="row">
          <div class="col col--md-6">
            <p class="text--justify">
              Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestieconsequat, vel illum dolore
              eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
              zzril delenit augue duis dolore te feugait nulla facilisi.
            </p>
          </div>
          <div class="col col--md-6">
            <p class="text--justify">
              Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestieconsequat, vel illum dolore
              eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
              zzril delenit augue duis dolore te feugait nulla facilisi.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col col--md-3">
            <p class="text--justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col col--md-3">
            <p class="text--justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col col--md-3">
            <p class="text--justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col col--md-3">
            <p class="text--justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
        </div>
      </article>
      <article>
        <header class="text--center"><h4>Lists</h4></header>
        <div class="row">
          <div class="col col--md-4">
            <ul>
              <li>Unordered List item 1</li>
              <li>Unordered List item 2
                <ul>
                  <li>List item a</li>
                  <li>List item b</li>
                  <li>List item c</li>
                </ul>
              </li>
              <li>Unordered List item 3</li>
              <li>Unordered List item 4</li>
            </ul>
          </div>
          <div class="col col--md-4">
            <ol>
              <li>Ordered List item 1</li>
              <li>Ordered List item 2
                <ol>
                  <li>List item a</li>
                  <li>List item b</li>
                  <li>List item c</li>
                </ol>
              </li>
              <li>Ordered List item 3</li>
              <li>Ordered List item 4</li>
            </ol>
          </div>
          <div class="col col--md-4">
            <dl>
              <dt>Description list term 1</dt>
              <dd>Term definition list item</dd>
              <dt>Description list term 2</dt>
              <dd>Term definition list item</dd>
              <dt>Description list term 3</dt>
              <dd>Term definition list item</dd>
              <dd>Term definition list item</dd>
            </dl>
          </div>
        </div>
      </article>
      <article>
        <header class="text--center"><h4>Blockqoute</h4></header>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto atque aut autem blanditiis
          consequatur culpa dolores eveniet iusto laudantium neque nobis omnis perspiciatis, quas ratione saepe ut vel
          voluptatum?
        </p>
        <blockquote>
          <p>The advance of technology is based on making it fit in so that you don't really even notice it, so it's
            part of everyday life. </p>
          <cite>- Bill Gates</cite>
        </blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur deserunt, dolorum, explicabo
          harum modi nesciunt nihil non obcaecati placeat quae quia quo ratione sequi voluptas! Architecto facilis quasi
          suscipit.
        </p>
      </article>
      <article>
        <header class="text--center"><h4>Semantic text elements</h4></header>

        <div class="row">
          <div class="col col--md-4">
            <abbr title="Internationalization">I18N</abbr>
            <code class="ml-10">&lt;abbr&gt;</code>
          </div>
          <div class="col col--md-4">
            <strong>Bold</strong>
            <code class="ml-10">&lt;strong&gt;</code> <code>&lt;b&gt;</code>
          </div>
          <div class="col col--md-4">
            <cite>Citation</cite>
            <code class="ml-10">&lt;cite&gt;</code>
          </div>
          <div class="col col--md-4">
            <code>Hello World!</code>
            <code class="ml-10">&lt;code&gt;</code>
          </div>
          <div class="col col--md-4">
            <del>Deleted</del>
            <code class="ml-10">&lt;del&gt;</code>
          </div>
          <div class="col col--md-4">
            <em>Emphasis</em>
            <code class="ml-10">&lt;em&gt;</code>
          </div>
          <div class="col col--md-4">
            <i>Italic</i>
            <code class="ml-10">&lt;i&gt;</code>
          </div>
          <div class="col col--md-4">
            <ins>Inserted</ins>
            <code class="ml-10">&lt;ins&gt;</code>
          </div>
          <div class="col col--md-4">
            <kbd>Ctrl + S</kbd>
            <code class="ml-10">&lt;kbd&gt;</code>
          </div>
          <div class="col col--md-4">
            <mark>Highlighted</mark>
            <code class="ml-10">&lt;mark&gt;</code>
          </div>
          <div class="col col--md-4">
            <ruby>
              漢 <rt>kan</rt>
              字 <rt>ji</rt>
            </ruby>
            <code class="ml-10">&lt;ruby&gt;</code>
          </div>
          <div class="col col--md-4">
            <s>Strikethrough</s>
            <code class="ml-10">&lt;s&gt;</code>
          </div>
          <div class="col col--md-4">
            <samp>Sample</samp>
            <code class="ml-10">&lt;samp&gt;</code>
          </div>
          <div class="col col--md-4">
            Text <sub>Subscripted</sub>
            <code class="ml-10">&lt;sub&gt;</code>
          </div>
          <div class="col col--md-4">
            Text <sup>Superscripted</sup>
            <code class="ml-10">&lt;sup&gt;</code>
          </div>
          <div class="col col--md-4">
            <time>20:00</time>
            <code class="ml-10">&lt;time&gt;</code>
          </div>
          <div class="col col--md-4">
            <u>Underline</u>
            <code class="ml-10">&lt;u&gt;</code>
          </div>
          <div class="col col--md-4">
            <var>x</var> = <var>y</var> + 2
            <code class="ml-10">&lt;var&gt;</code>
          </div>
        </div>



      </article>
    </div>
  </section>


  <!--  @foff-->




<br>
<br>
<br>
<br>
<br>
<br>



<!--  <section id="typography" class="row">-->
<!--      <div class="col">-->
<!--        <header class="text--center"><h3>Typography</h3></header>-->
<!--        <article>-->
<!--          <header class="text--center"><h4>Headings</h4></header>-->
<!--          <p>-->
<!--          <h1>Heading 1</h1>-->
<!--          <h2>Heading 2</h2>-->
<!--          <h3>Heading 3</h3>-->
<!--          <h4>Heading 4</h4>-->
<!--          </p>-->
<!--        </article>-->
<!--      </div>-->
<!--  </section>-->

</main>
<footer></footer>
</body>
</html>