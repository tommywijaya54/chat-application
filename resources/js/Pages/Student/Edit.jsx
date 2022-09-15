import React from 'react';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';
import EditForm from '@/Shared/EditForm';
import ListView from '@/Shared/ListView';

export default function Edit(props) {
    const FormProperties = {
        ELEMENTS: [
            { label:'Name', property: 'name' },
            { label:'School', property: 'school' },
            { label:'Grade', property: 'grade', options: [1,2,3,4,5,6,7,8,9,10,11,12] },
            { label:'Phone', property: 'phone' },
            { label:'Email', property: 'email' },
            { label:'Note', property: 'note' },
        ],
        ROUTE : {
            UPDATE : 'student.update'
        },
        DATA : props.student,
        PRIMARYID : 'id'
    }

    const ListProperties = {
        ELEMENTS: [
            { label:'Name', property: 'name' },
            { label:'Phone', property: 'phone' },
            { label:'NIK', property: 'nik' }
        ],
        ROUTE : {
            SHOW : 'parent.edit'
        },
        DATA : [props.parent],
        PRIMARYID : 'id'
    }


    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title={props.student.name}>
                
                <div className='mx-8 mb-12'>
                    <h2 className='text-lg font-bold mb-2'>Student details</h2>
                    <div className='bg-white rounded shadow'>
                        <EditForm 
                            FORMPROPS={FormProperties}
                        ></EditForm>
                    </div>
                </div>

                

                <div className='mx-8 mb-12'>
                    <h2 className='text-lg font-bold mb-2'>Parent details</h2>
                    <div className='bg-white rounded shadow'>
                        <ListView
                                LISTPROPS={ListProperties}
                            ></ListView>
                    </div>
                </div>

        </MainAuthenticatedLayout>
    );
}

