<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 hide-on-med-and-down">
                    <ul class="" style="line-height: 4rem; position: fixed;">
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="#" id="liHover">
                                <div><i class="material-icons">home</i></div>
                                <div id="sidenavLinks">Home</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="" id="liHover">
                                <div><i class="material-icons">star_half</i></div>
                                <div id="sidenavLinks"> Trending</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="#" id="liHover">
                                <div><i class="material-icons">bubble_chart</i></div>
                                <div id="sidenavLinks"> Groups</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="" id="liHover">
                                <div><i class="material-icons">star_half</i></div>
                                <div id="sidenavLinks"> My Profiles</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="#" id="liHover">
                                <div><i class="material-icons">person_add</i></div>
                                <div id="sidenavLinks"> Followers</div>
                            </a>
                        </li>
                        <li><div class="divider"></div></li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="" id="liHover">
                                <div><i class="material-icons">vpn_lock</i></div>
                                <div id="sidenavLinks"> Internet Of Things</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="" id="liHover">
                                <div><i class="material-icons">more_vert</i></div>
                                <div id="sidenavLinks"> My Google Plus Page</div>
                            </a>
                        </li>
                        <li style="height: 3.5rem;">
                            <a class="mb-5" href="" id="liHover">
                                <div><i class="material-icons">visibility_off</i></div>
                                <div id="sidenavLinks"> logout</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="collection card">
                        <li class="collection-item avatar">
                        <img src="https://source.unsplash.com/random/800x800/?user,avatar" alt="" class="circle">
                        <!-- Button trigger modal -->
                        <a class="waves-effect waves-light modal-trigger" data-toggle="modal" data-target="#exampleModal">
                            <input type="text" placeholder="Add A Caption.....">
                        </a>
                        <!-- Modal Trigger -->
                        <a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons">camera</i></a>
                        </li>
                    </ul>
                <!-- loop -->
                    <div class="card" v-for="article in articles" v-bind:key="article.article_id" >
                        <div class="card-header white">
                            <img style="height: 40px;" src="userImageUrl" alt="" class="circle">
                            <span>{{ article.username}}</span>
                            <form>
                                <button type="submit" name="submit" class='right ml-3 btn-floating blue lighten-2' value="like">
                                    <i class="material-icons">thumb_up</i>
                                </button>
                            </form>
                                <div class="chip truncate">
                                    <img class="" src="https://source.unsplash.com/random/800x800/?home,land" alt="Contact Person">
                                </div>
                        
                            <!-- dropdown -->
                            <a class='dropdown-trigger right' href='#' data-target='dropdown1'>
                                <i class="material-icons">share</i>
                            </a>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!"><i class="material-icons">share</i></a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li><a class="twitter-share-button" target="_blank" href="">Tweet</a></li>
                            </ul>
                            <!-- end dropdown -->
                        </div>
                        <div class="card-content">
                            <span class="blue-text">Date</span>
                            <h5>{{ article.title}}</h5>
                            <p>{{ article.body}}</p>
                        </div>
                        <div class="card-image">
                            <img 
                            class="materialboxed"
                            src="https://source.unsplash.com/random/800x700/?lady,naked">
                            <button @click="deleteArticle(article.id)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></button>
                        </div>
                        <div class="card-footer">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header">
                                    <img style="height: 40px;" src="https://source.unsplash.com/random/700x700" alt="" class="circle">
                                    <form>
                                        <textarea class="materialize-textarea" style="margin: 5px;" name="comment" placeholder="Add a comment..."></textarea>
                                        <button 
                                            type="submit" 
                                            class="btn-sm btn" 
                                            id="moveinlne" 
                                            name="submit"
                                            style="position: relative;
                                                margin-right: 10px;
                                                margin-top: -80px;
                                                margin-left: 100%;">
                                            <i class="material-icons">send</i>
                                        </button>
                                    </form>
                                    </div>
                                    <div class="collapsible-body">
                                        <blockquote>
                                            <div class="chip">
                                                // <img src="" alt="Contact Person">
                                                username
                                            </div>
                                        </blockquote>
                                
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <ul class="pagination">
                        <li v-bind:class="[{ disabled: !pagination.prev_page_url }]" class="active"><a href="#" 
                            @click="fetchArticles(pagination.prev_page_url)">Previous</a></li>
                        <li class="waves-effect disabled text-dark"><a href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>
                        <li v-bind:class="[{ disabled: !pagination.next_page_url }]"
                            class="waves-effect"><a href="#"
                            @click="fetchArticles(pagination.next_page_url)">next</a></li>
                    </ul>
                </div>
                <!-- trends -->
                <div class="col-md-4">
                    <span class="ml-2">Trending on Todos</span>
                    <!-- loops -->
                    <div class="card">

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            articles:[],
            article:{
                id: '',
                title: '',
                body: ''
            },
            article_id: '',
            pagination:{},
            edit: false
        }
    },
    created(){
        this.fetchArticles();
    },
    methods:{
        fetchArticles(page_url){
            let vm = this;
            page_url = page_url || '/api/articles'
            fetch(page_url)
            .then(res => res.json())
            .then(res => {
                // console.log(res.data);
                // return all articles
                this.articles = res.data;
                vm.makePagination(res.meta, res.links);

            })
            .catch(err => console.log(err));

        },
        makePagination(meta, links){
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            }
            this.makePagination = pagination;
        },
        deleteArticle(id){
            if(confirm('Are you sure to delete')){
                fetch(`api/article/${id}`, {
                    method: 'delete'
                })
                .then(res => res.json())
                .then(data => {
                    alert('Article Removed');
                    this.fetchArticles();
                })
                .catch(err => console.log(err));
            }
        }
    }
}
</script>

