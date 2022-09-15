import React from 'react';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';
import EditForm from '@/Shared/EditForm';
import ListView from '@/Shared/ListView';

export default function Edit(props) {
    const FormProperties = {
        ELEMENTS: [
            { label:'Name', property: 'name' },
            { label:'Phone', property: 'phone' },
            { label:'Address', property: 'address' },
            { label:'Email', property: 'email' },
            { label:'NIK', property: 'nik' },
            { label:'Birth Date', property: 'birthdate' },
            { label:'Note', property: 'note' },
        ],
        ROUTE : {
            UPDATE : 'parent.update'
        },
        DATA : props.parent,
        PRIMARYID: "id"
    }

    const ListProperties = {
        ELEMENTS: [
            { label:'Name', property: 'name' },
            { label:'School', property: 'school' },
            { label:'Grade', property: 'grade' }
        ],
        ROUTE : {
            SHOW : 'student.edit'
        },
        DATA : props.students,
        PRIMARYID: "id"
    }

    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title={props.parent.name}>
                <div className='mx-8 mb-12'>
                    <h2 className='text-lg font-bold mb-2'>Parent details</h2>
                    <div className='bg-white rounded shadow'>
                        <EditForm 
                            FORMPROPS={FormProperties}
                        ></EditForm>
                    </div>
                </div>


                <div className='mx-8 mb-12'>
                    <h2 className='text-lg font-bold mb-2'>Child/Student details</h2>
                    <div className='bg-white rounded shadow'>
                        <ListView
                                LISTPROPS={ListProperties}
                            ></ListView>
                    </div>
                </div>
        </MainAuthenticatedLayout>
    );
}