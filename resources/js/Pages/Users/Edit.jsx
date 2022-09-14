import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, InertiaLink, useForm } from '@inertiajs/inertia-react';
import Icon from '@/Shared/Icon';
import TextInput from '@/Shared/TextInput';
import SelectInput from '@/Shared/SelectInput';
import LoadingButton from '@/Shared/LoadingButton';

const EditUserForm = ({User, Roles}) => {
    const { data, setData, errors, post, processing } = useForm({
        name: User.name || '',
        email: User.email || '',
        role: User.role || '',
        _method: 'PUT'
    });
    
    function handleSubmit(e) {
        e.preventDefault();

        // NOTE: We are using POST method here, not PUT/PACH. See comment above.
        post(route('user.update', User.id));
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
                        label="Email"
                        name="email"
                        errors={errors.email}
                        value={data.email}
                        onChange={e => setData('email', e.target.value)}
                    />
                    <SelectInput
                        className="w-full pb-8 pr-6 lg:w-1/2"
                        label="Role"
                        name="role"
                        errors={errors.role}
                        value={data.role}
                        onChange={e => setData('role', e.target.value)}
                    >
                        {Roles.map(({id,role}) => {
                            return <option value={role} key={id}>
                                {role}
                            </option>
                        })}
                    </SelectInput>
                </div>
                <div className="flex items-center px-8 py-4 bg-gray-100 border-t border-gray-200">
                    <LoadingButton
                        loading={processing}
                        type="submit"
                        className="ml-auto btn-indigo"
                    >
                        Update User
                    </LoadingButton>
                </div>
            </form>
        </div>
    </>
}

export default function UserEdit(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{props.user.name}</h2>}
        >
            <Head title="User List" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <EditUserForm User={props.user} Roles={props.roles}></EditUserForm>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
