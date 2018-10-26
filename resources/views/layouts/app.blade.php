<!DOCTYPE html>
<html lang="pt-br">
    @include('layouts.partials.htmlheader')

    <body class="nav-md">
            <div class="wrapper">
                <div class="main-panel">
                    {{-- Menu Superior --}}   
                    @include('includes.layouts.topbar')
                        <div class="content" style="padding-top: 10px;padding-bottom: 0px;padding-left: 20px;padding-right: 20px;">
                            <div class="container-fluid">
                                {{-- Conteúdo Principal --}}
                                @yield('content')
                            </div>
                        </div>        
                        {{-- Rodapé --}}
                        @include('includes.layouts.footer')
                </div>
                <div style="clear:both"></div>
            </div>
    </body>
</html>
