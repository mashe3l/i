jQuery(function(a){var b=vars.rest_api_url;pvc={apps:{},models:{},collections:{},views:{}};_.templateSettings={evaluate:/[<{][%{](.+?)[%}][}>]/g,interpolate:/[<{][%{]=(.+?)[%}][}>]/g,escape:/[<{][%{]-(.+?)[%}][}>]/g};pvc.models.State=Backbone.Model.extend({defaults:{post_id:0,total_view:1,today_view:1}});pvc.collections.Stats=Backbone.Collection.extend({model:pvc.models.State,url:b});pvc.views.State=Backbone.View.extend({model:pvc.models.State,tagName:"span",template:_.template(a("#pvc-stats-view-template").html()),initialize:function(){},render:function(){this.$el.html(this.template(this.model.toJSON()));return this}});pvc.views.AppView=Backbone.View.extend({initialize:function(){this.listenTo(this.collection,"add",this.addOne)},addOne:function(a){a=new pvc.views.State({model:a});this.$el.html(a.render().el)}});pvc.apps.app={initialize:function(b,e){this.rest_api_url=e;view_pvc_ids=[];increase_pvc_ids=[];a.each(b,function(a,c){c.ask_update?increase_pvc_ids.push(c.post_id):view_pvc_ids.push(c.post_id)});increase_pvc_ids.length&&a.get(this.rest_api_url+"/increase/"+increase_pvc_ids.join(","),function(b){b.success&&a.each(b.items,function(b,d){collection=new pvc.collections.Stats;new pvc.views.AppView({collection:collection,el:a("#pvc_stats_"+b)});collection.add(d)})});view_pvc_ids.length&&a.get(this.rest_api_url+"/view/"+view_pvc_ids.join(","),function(b){b.success&&a.each(b.items,function(b,d){collection=new pvc.collections.Stats;new pvc.views.AppView({collection:collection,el:a("#pvc_stats_"+b)});collection.add(d)})})}}});jQuery(document).ready(function(a){if(a(".pvc_stats").length){var b={};a(".pvc_stats").each(function(){post_id=a(this).data("element-id");update_status=a(this).hasClass("pvc_load_by_ajax_update");b[post_id]={post_id:post_id,ask_update:update_status}});pvc.apps.app.initialize(b,vars.rest_api_url)}});