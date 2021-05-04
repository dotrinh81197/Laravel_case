@extends('layout.master')

@section('content')
<div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
  <form action="{{route('home.contract.find')}}" >
   
    <div class="inner-form">
      <div class="input-field first-wrap">
        <input
          id="search"
          type="text"
          name="keyword"
          placeholder="Tra cứu thông tin hợp đồng"
        />
      </div>
      
      <div class="input-field third-wrap">
        <button class="btn-search" type="submit">Search</button>
      </div>
    </div>
  </form>
</div>
<div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
     <table class="table table-borderless table-hover">
        <thead class="thead-light">
          <tr>
           <th>Mã số hợp đồng</th>
           <th>Tên khách hàng</th>
           <th>Ngày đăng ký</th>
           <th>Tư vấn viên</th>
           <th>Chi tiết hợp đồng</th>
           <th>Hành động</th>
          </tr>
            
        </thead>
        <tbody>
         @if (empty($contracts))
         <tr>
           KHÔNG CÓ HỢP ĐỒNG BẠN TÌM KIẾM
         </tr>   
          
         @else
                  @foreach ($contracts as $contract)
                <tr>
                    <td>{{$contract->id}}</td>
                    <td>{{$contract->full_name}}</td>
                    <td>{{$contract->created_at}}</td>
                    <td>{{$contract->user->name}}</td>
                    @if (!empty(Auth::user())&&Auth::user()->contract_id == $contract->id )
                    <td>
                      <a href="{{route('home.contract.detail', $contract->id)}}" class="btn btn-primary" onclick="">Chi tiết</a>
                    </td> 
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteContract({{$contract->id}})">Hủy Hợp Đồng</a>

                    </td>
                   
                        
                    @else
                        
                    @endif
                   
                   
                </tr>
            @endforeach
            
        </tbody>
        
    </table>
 @endif

</div>
@endsection

<script>
  function showDetailContract(idContract) {

    
  }
</script>