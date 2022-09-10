import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, InertiaLink } from '@inertiajs/inertia-react';
import Icon from '@/Shared/Icon';

const UserList = ({Users}) => {
    return <>
    <div className="overflow-x-auto bg-white rounded shadow">
        <table className="w-full whitespace-nowrap table-padding-row"> 
                <thead className="text-left">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>

                    </tr>
                </thead>
                <tbody>
                    {
                        Users.map(({id, name, email, role}) => {
                            return <tr 
                                key={id}
                                className="hover:bg-gray-100 focus-within:bg-gray-100"
                                >
                                <td>{name}</td>
                                <td>{email}</td>
                                <td>{role}</td>
                                <td>
                                    <InertiaLink
                                        tabIndex="-1"
                                        href={route('user.edit', id)}
                                        className="flex items-center px-4 focus:outline-none"
                                    >
                                    <Icon
                                        name="cheveron-right"
                                        className="block w-6 h-6 text-gray-400 fill-current"
                                    />
                                    </InertiaLink>
                                </td>
                            </tr>
                        })
                    }
                </tbody>
        </table>
    </div>
    </>
}

export default function UserIndex(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">User List</h2>}
        >
            <Head title="User List" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <UserList Users={props.users}></UserList>

                        <div className="p-6 bg-white border-b border-gray-200">
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
