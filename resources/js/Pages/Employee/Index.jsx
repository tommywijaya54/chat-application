import React from 'react';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';
import ListView from '@/Shared/ListView';

export default function Index(props) {
    const ListProperties = {
        ELEMENTS: [
            { label:'Name', property: 'name' },
            { label:'Phone', property: 'phone' },
            { label:'Email', property: 'email' },
            { label:'Role', property: 'role' }
        ],
        ROUTE : {
            SHOW : 'employee.edit'
        },
        DATA : props.employees,
        PRIMARYID : 'id'
    }

    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title="Employee List"
        >
            <div className="overflow-x-auto bg-white rounded shadow">
                <ListView
                    LISTPROPS={ListProperties}
                ></ListView>

            </div>
        </MainAuthenticatedLayout>
    );
}
