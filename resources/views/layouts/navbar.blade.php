<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand" >慈大社推課程管理系統</a>
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li>
                    <a href="#">學生請假</a> 
                  </li>
               </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            role="button" aria-haspopup="true" aria-expanded="false">
                            阿水<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                登出
                                </a>
                            </li>
                            
                        </ul>
                    </li> 
                </ul>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </nav>