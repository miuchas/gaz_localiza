!!!
%html
  %head
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}

    %title Localiza Quiz
    //Fonts
    %link{href: "https://fonts.googleapis.com/css?family=Lato:100", rel: "stylesheet"}
    %link{href: "https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700", rel: "stylesheet", type: "text/css"}
    //CSS
    %link{:href => "/css/app.css", :rel => "stylesheet", :type => "text/css"}

  %body
    @include('_menu')
    @yield('content')

    //javascripts
    %script{:src => "/js/app.js", :type => "text/javascript"}
    %script{:src => "/js/bootstrap.bundle.js", :type => "text/javascript"}
    %script{:src => "/js/bootstrap.js", :type => "text/javascript"}
    %script{:src => "/js/jquery-3.2.1.min.js", :type => "text/javascript"}
    %script{:src => "/js/popper.js", :type => "text/javascript"}
