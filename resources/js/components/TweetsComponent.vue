<template>

   <div class="container">

       <div class="row">

           <div class="col-md-12">

               <div class="panel panel-default">
                   
                   <div class="panel-heading">
                   
                        <h3><span class="glyphicon glyphicon-dashboard"></span>TWEETS</h3> <br>
                  
                   </div>
                   
                   <div style='width:100%' class="panel-body">

                        <table style='width:100%' class="table table-bordered table-striped" v-if="tweets.length > 0">

                                   <tbody>

                                       <tr>

					    <th>
                                               Account
                                           </th>
                                           <th>
                                               Content
                                           </th>
                                           <th>
                                               Retweets
                                           </th>
                                           <th>
                                               Likes
                                           </th>
                                           <th>
                                               Localization
                                           </th>
                                           <th>
                                               Date
                                           </th>
                                       </tr>

                                       <tr v-for="(tweet, index) in tweets">
                                           <td>{{ tweet.account }}</td>
                                           
				           <td>
                                               {{ tweet.content }}
                                           </td>		
	
					   <td>
                                               {{ tweet.retweets }}
                                           </td>
                                           
					  <td>
                                               {{ tweet.likes }}
                                           </td>

                                          <td>
                                               {{ tweet.localizacao }}
                                           </td>

                                           <td>
                                               {{ tweet.criacao }}
                                           </td>

                                          
                                       </tr>

                                   </tbody>

                                    <paginate
                                        :page-count="pageCount"
                                        :click-handler="fetch"
                                        :prev-text="' Anterior - '"
                                        :next-text="'- Próximo - '"
                                        :container-class="'pagination'">
                                    </paginate>

                       </table>

                   </div>

               </div>

           </div>

       </div>
                   
   </div>

 </template>



<script>
    export default {
        data() {
            return {
                pessoas: [],
                pageCount: 1,
                endpoint: 'api/tweets?page='
            };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.tweets = data.data;
                        this.pageCount = data.meta.last_page;
                    });
            }
           
           
        }
    }
</script>
