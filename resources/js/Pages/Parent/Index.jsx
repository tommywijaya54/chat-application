import React from 'react';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';
import { InertiaLink } from '@inertiajs/inertia-react';
import Icon from '@/Shared/Icon';

const List = ({listdata}) => {
    return <>
        <div className="overflow-x-auto bg-white rounded shadow">
            <table className="w-full whitespace-nowrap table-padding-row"> 
                    <thead className="text-left">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>NIK</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            listdata.map(({id, name, phone, nik, email}) => {
                                return <tr 
                                    key={id}
                                    className="hover:bg-gray-100 focus-within:bg-gray-100"
                                    >
                                    <td>{name}</td>
                                    <td>{phone}</td>
                                    <td>{nik}</td>
                                    <td>{email}</td>
                                    <td>
                                        <InertiaLink
                                            tabIndex="-1"
                                            href={route('parent.edit', id)}
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

export default function Index(props) {
    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title="Parent List"
        >
            <List listdata={props.parents}></List>
        </MainAuthenticatedLayout>
    );
}
