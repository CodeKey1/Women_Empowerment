@extends('admin.incloudes.admin')
@section('content')
<div class="sb2-2-2">
    <ul>
        <li class="page-back"><a href="{{ route('dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> عودة </a>
        </li>
        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
        </li>
        <li class="active-bre"><a href="#"> الإحصائيات </a>
        </li>

    </ul>
</div>
    <!--== User Details ==-->
    <div>

        <a href="{{ route('admin.oldproject.create') }}" class="ad-st-view" style=" "> اضافة نموذج جديد </a>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4> نمازج المشاريع </h4>
                        <p> لرائدات أعمال </p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>الاسم</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($old_project)
                                        @foreach ($old_project as $num => $mopadras)
                                            <tr>
                                                <td>{{ $num+1 }}
                                                </td>
                                                <td><a href="#"><span class="list-enq-name">{{ $mopadras->name }}</span></a>
                                                </td>
                                                <td><a href="{{ route('admin.oldproject.delete',$mopadras->id) }}" class="ad-st-view"> حذف </a></td>

                                                
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
