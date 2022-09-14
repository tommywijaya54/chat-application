import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, InertiaLink, useForm } from '@inertiajs/inertia-react';
import Icon from '@/Shared/Icon';
import TextInput from '@/Shared/TextInput';
import SelectInput from '@/Shared/SelectInput';
import LoadingButton from '@/Shared/LoadingButton';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';

const EditForm = ({formdata}) => {
    const POST_UPDATE_ROUTE = 'parent.update';
    const POST_UPDATE_ID = formdata.id;

    const { data, setData, errors, post, processing } = useForm({
        name: formdata.name || '',
        phone: formdata.phone || '',
        address: formdata.address || '',
        email: formdata.email || '',
        nik: formdata.nik || '',
        birthdate: formdata.birthdate || '',
        note: formdata.note || '',
        _method: 'PUT'
    });
    
    function handleSubmit(e) {
        e.preventDefault();
        post(route(POST_UPDATE_ROUTE, POST_UPDATE_ID));
    }
    
    return <>
        <div className="mb-6 p-6 bg-white border-b border-gray-200">
            <form onSubmit={handleSubmit}>
                <div className="flex flex-wrap p-8 -mb-8 -mr-6">
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Name"
                        name="name"
                        errors={errors.name}
                        value={data.name}
                        onChange={e => setData('name', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Phone"
                        name="phone"
                        errors={errors.phone}
                        value={data.phone}
                        onChange={e => setData('phone', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Address"
                        name="address"
                        errors={errors.address}
                        value={data.address}
                        onChange={e => setData('address', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Email"
                        name="email"
                        errors={errors.email}
                        value={data.email}
                        onChange={e => setData('email', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="NIK"
                        name="nik"
                        errors={errors.nik}
                        value={data.nik}
                        onChange={e => setData('nik', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Birth date"
                        name="birthdate"
                        errors={errors.birthdate}
                        value={data.birthdate}
                        onChange={e => setData('birthdate', e.target.value)}
                    />
                    <TextInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Note"
                        name="note"
                        errors={errors.note}
                        value={data.note}
                        onChange={e => setData('note', e.target.value)}
                    />
                </div>
                <div className="flex items-center px-8 py-4 bg-gray-100 border-t border-gray-200">
                    <LoadingButton
                        loading={processing}
                        type="submit"
                        className="ml-auto btn-indigo"
                    >
                        Update
                    </LoadingButton>
                </div>
            </form>
        </div>
    </>
}

export default function Edit(props) {
    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title={props.parent.name}>
                <EditForm formdata={props.parent}></EditForm>
        </MainAuthenticatedLayout>
    );
}

