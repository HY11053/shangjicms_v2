@extends('admin.layouts.admin_app')
@section('title')  问答回复列表@stop
@section('head')
    <link rel="stylesheet" href="/AdminLTE/plugins/switchery/switchery.css" />
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">问答列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>回复标题</th>
                            <th>回复内容</th>
                            <th>创建时间</th>
                            <th>更改时间</th>
                            <th>审核状态</th>
                            <th>投票数</th>
                            <th>否定数</th>
                            <th>操作</th>

                        </tr>
                        @foreach($answerlists as $answerlist)
                            <tr>
                                <td>{{$answerlist->id}}.</td>
                                <td>{{$answerlist->ask->title}}</td>
                                <td>{{str_limit(strip_tags($answerlist->content),20,'...')}}</td>
                                <td>{{$answerlist->created_at}}</td>
                                <td>{{$answerlist->updated_at}}</td>
                                <td>@if($answerlist->is_hidden!=0) 已审核 @else 未审核 @endif</td>
                                <td>{{$answerlist->viewnum}}</td>
                                <td>{{$answerlist->answernum}}</td>
                                <td class="newcolor"><span class="badge bg-green"><a href="/admin/answer/edit/{{$answerlist->id}}">编辑</a></span> <span class="badge bg-red"><a href="/admin/answer/delete/{{$answerlist->id}}">删除</a> </span></td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $answerlists->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>

    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <!-- jQuery 2.2.3 -->
    <script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
    <script src="/AdminLTE/plugins/switchery/switchery.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

        });
        $(function () {
            $(".switchery").click(function () {

            })
        })
    </script>


    <script type="text/javascript">

        // Default
        // if-else statement used only for fixing <IE9 issues

        // Switch sizes
        var small = document.querySelector('.js-switch-small');
        var switchery = new Switchery(small, { size: 'small' });

        var large = document.querySelector('.js-switch-large');
        var switchery = new Switchery(large, { size: 'large' });




    </script>
@stop


