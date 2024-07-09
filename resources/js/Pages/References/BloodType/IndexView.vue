<script setup>
import { Link } from '@inertiajs/vue3';
import PageTitle from "@/Pages/Components/PageTitle.vue";
const props = defineProps({
        bloodTypes: Object
    });
    let count = 1

</script>

    <template>
        <div>
            <div class="flex justify-between items-center">
                <PageTitle page-name="Blood Types" description="List of all blood types"/>
                <Link :href="route('blood-types.create')"><button class="primary-btn h-fit">Add</button></Link>
            </div>
            <div class="card">
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="table-item">No.</th>
                            <th class="table-item">Name</th>
                            <th class="table-item">Status</th>
                            <th class="table-item">Description</th>
                            <th class="table-item">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b" v-for="bloodType in props.bloodTypes" :key="bloodType.id">
                            <td class="table-item">{{ count++ }}</td>
                            <td class="table-item">{{ bloodType.name }}</td>
                            <td class="table-item">{{ bloodType.status }}</td>
                            <td class="table-item">{{ bloodType.description }}</td>
                            <td class="table-action-item">
                                <button class="act-btn bg-red-500">Delete</button>
                                <button class="act-btn bg-yellow-500">Show</button>
                                <button class="act-btn bg-green-500">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </template>
