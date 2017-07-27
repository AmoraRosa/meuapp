<nav class="navbar navbar-inverse ">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/">{{config('app.name', 'MEU App')}}</a>
       </div>
       <div id="navbar" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
           <li><a href="/">Home</a></li>
           <li><a href="/about">Sobre</a></li>
           <li><a href="/services">Serviços</a></li>
           <li><a href="/post">Blog</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="/post/create">Criar Post</a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
</nav>
