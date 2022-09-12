import React, { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, InertiaLink } from '@inertiajs/inertia-react';
import Icon from '@/Shared/Icon';
import SearchContactBox from './Components/SearchContactBox';

const CurrentChatPanel = ({Users, Me}) => {
    return <>
        <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div className="bg-white border-b border-gray-200">
                <div className='md:flex md:flex-grow md:overflow-hidden'>
                    <div className='hidden md:block flex-shrink-0 w-96 overflow-y-auto text-white'>
                        <SearchContactBox Users={Users} Me={Me}></SearchContactBox>
                        
                        <div className='py-4 px-6 bg-indigo-800'>
                            Current Chat Panel<br/>
                            Participant List
                        </div>
                        
                    </div>
                    <div className='md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto'>
                        Chat Box
                    </div>
                </div>

            </div>
        </div>
    </>
}


const ChatPanel = ({Users,Me}) => {
    console.table(Users);
    console.table(Me);
    return <>

        <h1>Chat Panel</h1>
        {
            Users.map(({id,name}) => {
            return <>
                {id} : {name} <br/>
            </>
            })
        }

    </>
}

export default function ChatIndex(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Chat</h2>}
        >
            <Head title="Chat" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <CurrentChatPanel Users={props.users}  Me={props.auth.user}></CurrentChatPanel>


                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <ChatPanel Users={props.users} Me={props.auth.user}></ChatPanel>
                        </div>
                    </div>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
