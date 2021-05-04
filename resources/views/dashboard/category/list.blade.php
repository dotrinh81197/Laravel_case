
                    <table class="table table-hover table-striped" id="categoryTable">
                      
                           <thead>
                              <tr><td>Name</td>
                               <td>Category</td>   
                               <td></td>
                               <td></td>
                           </tr></thead>
                           
                     
                        <tbody>
                     
                                   @foreach ($categories as $category)
                                   <tr>
                               
                                    <td>{{$category->name}}</td>
                                    <td>
                                       <a class="btn btn-warning" id="btn-edit" href="javascript:void(0)" onclick="openEditForm({{$category->id}})">sửa</a></td> 
                                     <td>
                                     <a href="javascript:void(0)" class="btn btn-danger" type="button" onclick="deleteCategory({{$category->id}})"> Xóa   
                                     </a>
                                    </td>
                                   
                                    
                                </tr>
                                   @endforeach                      
                        </tbody>
                
                    </tbody>
                       
                    </table>
               



