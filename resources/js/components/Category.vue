<template>
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table">
                <thead>
                    <th>Category</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr v-for="category in categories" :key="category.id">
                        <td>
                           {{category.name}}
                        </td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h3>Add New Category</h3>
            <hr>
            <form @submit.prevent="createCategory">
               <div class="form-group">
      <label>Category Name</label>
      <input v-model="form.name" type="text" name="name"
        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
      <has-error :form="form" field="name"></has-error>
    </div>

 <input type="submit" value="Add Category" class="btn btn-success btn-md btn-block">
            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {


    created() {
        this.loadCategories();
    },

    data() {
        return {
            categories:{},
            form: new Form(
                {
                    name: '',
                }
            )

        }
    },
    methods:  {
        loadCategories() {
            axios.get("api/category").then(({ data }) => (this.categories = data.data));
        },

        createCategory() {
            this.form.post('/api/category');
        }
    },

}

</script>
