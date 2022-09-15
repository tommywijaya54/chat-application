import React from 'react';
import MainAuthenticatedLayout from '@/Layouts/MainAuthenticatedLayout';
import List from '@/Shared/List';

export default function Index(props) {
    const LIST_HEADER = ['Name','School','Grade', 'Phone'];
    const LIST_DATA_MAP = ['name','school','grade', 'phone'];
    const ROUTE_TO = 'student.edit';

    return (
        <MainAuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            title="Student List"
        >
            <div className="overflow-x-auto bg-white rounded shadow">
                <List
                    headers={LIST_HEADER}
                    listmap={LIST_DATA_MAP}
                    listdata={props.students}
                    routeto={ROUTE_TO}
                >
                </List>
            </div>
        </MainAuthenticatedLayout>
    );
}
