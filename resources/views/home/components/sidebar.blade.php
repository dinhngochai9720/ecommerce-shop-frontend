<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Categorys</h2>
        <!--category-products-->
        <div class="panel-group category-products" id="accordian">
            @foreach ($categorys as $category)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        @if ($category->categoryChilrent->count())
                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear_{{$category->id}}">
                                <span class="badge pull-right">
                                    <i class="fa fa-plus"></i>
                                </span>
                            {{$category->name}}
                            </a>

                        @else
                        <a href="{{route('category.index',['slug'=>$category->slug,'id'=>$category->id])}}">
                            <span class="badge pull-right">
                            </span>
                        {{$category->name}}
                        </a>
                        @endif
                    </h4>
                </div>

                <div id="sportswear_{{$category->id}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach ($category->categoryChilrent as $categoryChildrentItem)
                            <li>
                                <a href="{{route('category.index',['slug'=>$categoryChildrentItem->slug,'id'=>$categoryChildrentItem->id])}}">

                                    {{$categoryChildrentItem->name}} 
                                </a>
                            </li>
                            @endforeach
                          
                         </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--/category-products-->
    
       
        
      
       
    </div>
</div>
