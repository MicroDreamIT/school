    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Create {{ $panel }}</h4>
    <!-- PAGE CONTENT BEGINS -->
    <div class="tabbable">
        <ul class="nav nav-tabs  padding-18 hidden-print ">
            <li class="active btn btn-primary" style="margin: 1px;" >
                <a data-toggle="tab" href="#create" style="color: white;">
                    <i class="green ace-icon fa fa-plus bigger-140" style="color: white;"></i>
                    Create
                </a>
            </li>
            <li class="btn btn-primary" style="margin: 1px;" >
                <a data-toggle="tab" href="#import" style="color: white; ">
                    <i class="green ace-icon fa fa-file-excel-o bigger-140" style="color: white;"></i>
                    Import
                </a>
            </li>

        </ul>

        <div class="tab-content no-border padding-24">
            <div id="create" class="tab-pane in active">
                @include($view_path.'.includes.form')
            </div><!-- /#AcademicInfo -->

            <div id="import" class="tab-pane">
                @include($view_path.'.includes.import')
            </div><!-- /#home -->
        </div>
    </div>
    <div class="hr hr-18 dotted hr-double"></div>
