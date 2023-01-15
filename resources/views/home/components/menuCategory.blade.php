
                              @if ($categoryParent->categoryChilrent->count())
                              <ul role="menu" class="sub-menu">
                                  @foreach ( $categoryParent->categoryChilrent as $categoryChild )
                                      
                                  <li>
                                    <a href="{{route('index')}}">{{$categoryChild->name}}</a>

                                    @if ( $categoryParent->categoryChilrent->count())
                                        @include('home.components.menuCategory',['categoryParent'=> $categoryChild])
                                    @endif
                                
                                </li>
                                  
                                  @endforeach
                                
                              </ul>
                            @endif
                           